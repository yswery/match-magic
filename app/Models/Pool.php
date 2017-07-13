<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pool extends Model
{
    protected $table = 'selection_pool';
    protected $fillable = ['member_id'];

    public function createPairs($pairCount = 3)
    {
        $pairs = collect();

        for ($i = 0; $i < $pairCount; $i++) {

            // get the latest version of all memebers
            $availableMembers = $this->all();

            // if we dont have at least 2 people then just reset all and rerun
            if ($availableMembers->count() < 2) {
                $this->resetPool();
                $i--;
                continue;

            }

            $availableMembers->shuffle();
            $member1 = $availableMembers->pop();
            $this->find($member1->id)->delete();

            // Get all the member IDs which this person has already gone with
            $goneWithIds = HistoricPair::where('member_id_1', $member1->member_id)->pluck('member_id_2')->toArray();
            $goneWithIds = array_merge([$member1->member_id], $goneWithIds, HistoricPair::where('member_id_2', $member1->member_id)->pluck('member_id_1')->toArray());
            $goneWithIds = array_unique($goneWithIds);

            // Get all other members that have not yet gone on dates with member1 that ARE avlaiable
            $availablePairMember = $this->whereNotIn('member_id', $goneWithIds)->get();

            // if there are non, then, tough shit, find someone else...
            if ($availablePairMember->count() === 0) {
                $i--;
                continue;
            }

            $member2 = $availablePairMember->pop();
            $this->find($member2->id)->delete();

            $pairs->push([Member::find($member1->member_id), Member::find($member2->member_id)]);

            $historicPair              = new HistoricPair;
            $historicPair->member_id_1 = $member1->member_id;
            $historicPair->member_id_2 = $member2->member_id;
            $historicPair->save();
        }

        return $pairs;
    }

    // Resets the pool
    public function resetPool()
    {
        $this->truncate();

        foreach (Member::all() as $member) {
            $this->create(['member_id' => $member->id]);
        }
    }

}
