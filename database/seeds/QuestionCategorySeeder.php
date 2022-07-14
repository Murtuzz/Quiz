<?php

use Illuminate\Database\Seeder;
use App\QuestionCategory;


class QuestionCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = array(
            'General',
            'English',
            'Accounting',
        );

        foreach( $categories as $category ){
            $questionCategory = new QuestionCategory();
            $questionCategory->name = $category;
            $questionCategory->save();
        }

    }
}
