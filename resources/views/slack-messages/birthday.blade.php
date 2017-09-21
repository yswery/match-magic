<!channel> - I have an important announcement to make...

<?php
$birthdayMessages = [
    'Wooaa!!! its ' . $member->name . '\'s birthday, getting old, huh',
    $member->name . ', I heard its your birthday, dont forget to get some wrinkle cream',
    'Happy birthday '.$member->name.'. You should be proud of your age. This year you are wiser, smarter and very close to reaping the benefits of senior discounts at restaurants.',
    $member->name.', At least you’re not as old as you will be next year! Happy Birthday!',
    'Birthdays are nature’s way of telling us to eat more cake. I hope someone got cake for '.$member->name.' since its their birthday!',
    $member->name . ', At least you’re not as old as you will be next year! Happy Birthday!',
];
?>
{{  $birthdayMessages[array_rand($birthdayMessages)] }}

:birthday: :tada:  :parrot: :cake: :star:

<?php
$gifs = [
    'https://media.giphy.com/media/3o6gbbbGbpBZCRm15C/giphy.gif',
    'https://media.giphy.com/media/26BRtW4zppWWjrsPu/giphy.gif',
    'https://media.giphy.com/media/l46CkATpdyLwLI7vi/giphy.gif',
    'https://media.giphy.com/media/3oEhn78T277GKAq6Gc/giphy.gif',
    'https://media.giphy.com/media/arGdCUFTYzs2c/giphy.gif',
    'https://media.giphy.com/media/eGsBGj0PisO3u/giphy.gif',
];
?>

{{  $gifs[array_rand($gifs)] }}
