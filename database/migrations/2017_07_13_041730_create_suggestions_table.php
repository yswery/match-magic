<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuggestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suggestions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('category');
            $table->text('description');
            $table->timestamps();
        });

        // ========================================
        $suggestion = new \App\Models\Suggestion();
        $suggestion->category = 'food';
        $suggestion->description = 'Grab a coffee & salted caramel cookie at Red Rabbit - https://redrabbitcoffee.co.nz/pages/contact';
        $suggestion->save();
        // ========================================
        $suggestion = new \App\Models\Suggestion();
        $suggestion->category = 'food';
        $suggestion->description = 'But cafe’s are boring… go to the Board Game Cafe! - http://www.cakesnladders.co.nz/';
        $suggestion->save();
        // ========================================
        $suggestion = new \App\Models\Suggestion();
        $suggestion->category = 'food';
        $suggestion->description = 'Have cuddles with Cats at the BaristaCats Cafe - http://baristacatscafe.co.nz/home/home/';
        $suggestion->save();
        // ========================================
        $suggestion = new \App\Models\Suggestion();
        $suggestion->category = 'food';
        $suggestion->description = 'Goodness Gracious I feel like a bagel! - http://www.goodnessgracious.co.nz/';
        $suggestion->save();
        // ========================================
        $suggestion = new \App\Models\Suggestion();
        $suggestion->category = 'food';
        $suggestion->description = 'Grab some gelato at Casa Del Gelato - https://www.parnell.net.nz/directory-listing/casa-del-gelato/';
        $suggestion->save();
        // ========================================
        $suggestion = new \App\Models\Suggestion();
        $suggestion->category = 'food';
        $suggestion->description = 'Eat ~fresh~ well, have a cookie and a sub. - http://www.subway.com/en-nz';
        $suggestion->save();
        // ========================================
        $suggestion = new \App\Models\Suggestion();
        $suggestion->category = 'food';
        $suggestion->description = 'Think your stranded in Parnell, go here - https://thestrandcafe.co.nz/';
        $suggestion->save();
        // ========================================
        $suggestion = new \App\Models\Suggestion();
        $suggestion->category = 'food';
        $suggestion->description = 'Feeling cold? Go to The Chiller for some hot drinks - https://www.parnell.net.nz/directory-listing/the-chiller/';
        $suggestion->save();
        // ========================================
        $suggestion = new \App\Models\Suggestion();
        $suggestion->category = 'food';
        $suggestion->description = 'Barulho has the best cocktails! - https://www.theurbanlist.com/auckland/directory/barulho';
        $suggestion->save();
        // ========================================
        $suggestion = new \App\Models\Suggestion();
        $suggestion->category = 'food';
        $suggestion->description = 'You’re such a sweety!  - http://www.chocolateboutique.co.nz/';
        $suggestion->save();
        // ========================================
        $suggestion = new \App\Models\Suggestion();
        $suggestion->category = 'activity';
        $suggestion->description = 'Let’s go bowling - http://www.metrolanes.co.nz/';
        $suggestion->save();
        // ========================================
        $suggestion = new \App\Models\Suggestion();
        $suggestion->category = 'activity';
        $suggestion->description = 'Go to a free event & grab some dinner - https://www.aucklandlive.co.nz/search/events?genre=-&date=-&price=0 ';
        $suggestion->save();
        // ========================================
        $suggestion = new \App\Models\Suggestion();
        $suggestion->category = 'activity';
        $suggestion->description = 'Volunteer at a local charity - https://www.facebook.com/raiseyourhandnz/';
        $suggestion->save();
        // ========================================
        $suggestion = new \App\Models\Suggestion();
        $suggestion->category = 'activity';
        $suggestion->description = 'Go to the zoo or art gallery - http://www.aucklandzoo.co.nz/default';
        $suggestion->save();
        // ========================================
        $suggestion = new \App\Models\Suggestion();
        $suggestion->category = 'activity';
        $suggestion->description = 'If you have some time… - http://www.lilliputt.co.nz/lost-in-time/';
        $suggestion->save();
        // ========================================
        $suggestion = new \App\Models\Suggestion();
        $suggestion->category = 'activity';
        $suggestion->description = 'Quiz it up at the Paddington - http://www.thepaddington.co.nz/whats-on.html';
        $suggestion->save();
        // ========================================
        $suggestion = new \App\Models\Suggestion();
        $suggestion->category = 'activity';
        $suggestion->description = 'Take a free tour at Queens Wharf - http://www.thepaddington.co.nz/whats-on.html';
        $suggestion->save();
        // ========================================
        $suggestion = new \App\Models\Suggestion();
        $suggestion->category = 'activity';
        $suggestion->description = 'Laugh until you hurt at a Comedy Show - http://www.comedy.co.nz/';
        $suggestion->save();
        // ========================================
        $suggestion = new \App\Models\Suggestion();
        $suggestion->category = 'activity';
        $suggestion->description = 'Compete to find & buy the weirdest piece of clothing in an OpShop on K Road - https://www.paperbagprincess.co.nz/';
        $suggestion->save();
        // ========================================
        $suggestion = new \App\Models\Suggestion();
        $suggestion->category = 'activity';
        $suggestion->description = 'Take a dip at Parnell pools - http://www.clmnz.co.nz/parnellbaths/contact/rates/';
        $suggestion->save();
        // ========================================
        $suggestion = new \App\Models\Suggestion();
        $suggestion->category = 'random';
        $suggestion->description = 'Long walk on a short beach - https://goo.gl/YfWSqL';
        $suggestion->save();
        // ========================================
        $suggestion = new \App\Models\Suggestion();
        $suggestion->category = 'random';
        $suggestion->description = 'Hire a tandem bike or some roller blades for an hour - http://fergskayaks.co.nz/rental';
        $suggestion->save();
        // ========================================
        $suggestion = new \App\Models\Suggestion();
        $suggestion->category = 'random';
        $suggestion->description = 'Feed the ducks at the park - https://goo.gl/PP2c4d';
        $suggestion->save();
        // ========================================
        $suggestion = new \App\Models\Suggestion();
        $suggestion->category = 'random';
        $suggestion->description = 'Go window shopping  - https://www.parnell.net.nz/';
        $suggestion->save();
        // ========================================
        $suggestion = new \App\Models\Suggestion();
        $suggestion->category = 'random';
        $suggestion->description = 'Plant a tree  - http://www.aucklandcouncil.govt.nz/en/environmentwaste/sustainabilityconservation/environmentalprogrammes/pages/volunteerinourparks.aspx';
        $suggestion->save();
        // ========================================
        $suggestion = new \App\Models\Suggestion();
        $suggestion->category = 'random';
        $suggestion->description = 'Find the weirdest video on YouTube. Eat popcorn. Start here: https://www.youtube.com/watch?v=oT3mCybbhf0';
        $suggestion->save();
        // ========================================
        $suggestion = new \App\Models\Suggestion();
        $suggestion->category = 'random';
        $suggestion->description = 'Climb a volcano (there are 48 on Auckland!) - https://goo.gl/rCahfx';
        $suggestion->save();
        // ========================================
        $suggestion = new \App\Models\Suggestion();
        $suggestion->category = 'random';
        $suggestion->description = 'Check out a 20 minute lecture at Creative Mornings - https://creativemornings.com/cities/akl/about';
        $suggestion->save();
        // ========================================
        $suggestion = new \App\Models\Suggestion();
        $suggestion->category = 'random';
        $suggestion->description = 'Pull a prank on your team at work - https://prankcandles.com/blogs/prank-blog/funny-pranks-to-pull-at-work-in-the-office';
        $suggestion->save();
        // ========================================
        $suggestion = new \App\Models\Suggestion();
        $suggestion->category = 'random';
        $suggestion->description = 'Try some duo street busking  - https://endlessvideo.com/watch?v=NuBEKNRHzGY';
        $suggestion->save();
        // ========================================

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('suggestions');
    }
}
