<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            

            $table->enum('status', ['started', 'stopped'])->default('started');
            $table->date('start_time')->default(Carbon::now());
            $table->date('stop_time')->default(Carbon::now());

            $table->integer('follower_gained')->default(0);

            $table->boolean('activity_views')->default(1);
            $table->integer('activity_views_value')->default(0);
            $table->boolean('activity_likes')->default(1);
            $table->integer('activity_likes_value')->default(0);
            $table->boolean('activity_comments')->default(1);
            $table->integer('activity_comments_value')->default(0);
            $table->boolean('activity_follows')->default(1);
            $table->integer('activity_follows_value')->default(0);
            $table->boolean('activity_unfollows')->default(1);
            $table->integer('activity_unfollows_value')->default(0);

            //tags
            $table->boolean('use_tags')->comment('Field Tags')->default(1);
            // need relation to tags table
            //field
            $table->boolean('use_location')->comment('Field Location')->default(0);
            // need relation to location table

            // users
            $table->string('use_followers_of')->default('both')->comment('Field Users');
            $table->string('use_followings_of')->default('both')->comment('Field Users');
            $table->string('use_likers_on')->default('both')->comment('Field Users');
            $table->string('use_commenters_on')->default('both')->comment('Field Users');
            // need relation to username table

            //targetting
            $table->boolean('use_feed')->default(0)->comment('Field Targeting');
            $table->boolean('use_explore_page')->default(0)->comment('Field Targeting');
            $table->boolean('use_incoming_activity')->default(0)->comment('Field Targeting');

            // filter
            $table->string('media_age')->default('1m')->comment('Field filter');
            $table->string('media_type')->default('any')->comment('Field filter');
            $table->integer('min_likes_filter')->default(0)->comment('Field filter');
            $table->integer('max_likes_filter')->default(0)->comment('Field filter');
            $table->integer('min_comments_filter')->default(0)->comment('Field filter');
            $table->integer('max_comments_filter')->default(0)->comment('Field filter');
            $table->string('use_relations_filter')->default('both')->comment('Field filter');
            $table->string('use_profile_filter')->default('medium')->comment('Field filter');
            $table->integer('min_followers_filter')->default(0)->comment('Field filter');
            $table->integer('max_followers_filter')->default(0)->comment('Field filter');
            $table->integer('min_followings_filter')->default(0)->comment('Field filter');
            $table->integer('max_followings_filter')->default(0)->comment('Field filter');
            $table->string('gender_filter')->default('off')->comment('Field filter');
            $table->boolean('tag_tag_filter')->default(0)->comment('Field filter');
            $table->boolean('location_tag_filter')->default(0)->comment('Field filter');
            $table->boolean('username_tag_filter')->default(0)->comment('Field filter');
            //blacklist
            //need relation to tagblacklist
            //need relation to usernameBlacklist
            // need relation to keyword blacklist

            //like
            $table->boolean('dont_like_same_user')->default(1)->comment('Field Like');
            //comment
            $table->boolean('dont_comment_same_user')->default(0)->comment('Field Comment');
            
            //follow
            $table->string('follow_source')->default('media')->comment('Field Follow');
            $table->integer('follow_cycle')->default(1000)->comment('Field Follow');
            $table->boolean('dont_follow_same_user')->default(1)->comment('Field Follow');
            $table->boolean('dont_follow_private_user')->default(1)->comment('Field Follow');
            
            // unfollow
            $table->string('unfollow_source')->default('instagress')->comment('Field Unfollow');
            $table->integer('unfollow_cycle')->default(1000)->comment('Field Unfollow');
            $table->boolean('unfollow_who_dont_follow_me')->default(0)->comment('Field Unfollow');


            

            // auto stop
            $table->integer('likes_counter')->default(0)->comment('Field Auth stop');
            $table->integer('comments_counter')->default(0)->comment('Field Auth stop');
            $table->integer('follows_counter')->default(0)->comment('Field Auth stop');
            $table->integer('unfollows_counter')->default(0)->comment('Field Auth stop');
            $table->time('timer')->default('00:00')->comment('Field Auth stop');
            $table->string('stop_if_no_activity')->default('3hour')->comment('Field Auth stop');
            
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
