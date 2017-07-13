<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;

class Pool extends Model
{
    protected $table = 'selection_pool';

    public function createPair($pairCount = 3)
    {
        $availableMembers = $this->all();

        $pairs = collect();

        for ($i = 0; $i < $pairCount; $i++) {

            if ($availableMembers->count() === 0) {
                Log::error('Not enough people to go on dates with, please reset the list');
                return false;
            }

            // get random user from the one from the pool and then remove them
            $availableMembers->shuffle();
            $member1 = $availableMembers->pop();
            $this->find($member1->id)->delete();

            // get random user from the one from the pool and then remove them
            $availableMembers->shuffle();
            $member2 = $availableMembers->pop();
            $this->find($member2->id)->delete();

            // If the pair has already dated then run again
            if (HistoricPair::where('member_id_1', $member1->member_id)->where('member_id_2', $member2->member_id)->first() || HistoricPair::where('member_id_1', $member2->member_id)->where('member_id_2', $member1->member_id)->first()) {
                // Rerun
                $i--;
                continue;
            }

            $historicPair = new HistoricPair;
            $historicPair->member_id_1 = $member1->member_id;
            $historicPair->member_id_2 = $member2->member_id;
            $historicPair->save();

            $pairs->push([Member::find($member1->member_id), Member::find($member2->member_id)]);
        }

        return $pairs;
    }

}
