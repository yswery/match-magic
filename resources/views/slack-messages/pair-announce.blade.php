<!channel>, On this week’s MatchMagic, the following team members have been selected:

@foreach($pairs as $pair)
    - *{{ $pair[0]->name }}* and *{{ $pair[1]->name }}*
@endforeach


Tune in next week, you could be the next magic match! Who’s eligible?
@foreach($membersToDate as $member)
    - _{{ $member->name }}_
@endforeach