<?php

use Illuminate\Database\Seeder;
use App\QuizQuestion;
use App\QuestionCategory;

class QuizQuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $questions = array(
            array(
                'question' => 'What is the capital of India?',
                'option_a' => 'New Delhi',
                'option_b' => 'Mumbai',
                'option_c' => 'Chennai',
                'option_d' => 'Kolkata',
                'answer' => 'New Delhi'
            ),
            array(
                'question' => 'What is the capital of Pakistan?',
                'option_a' => 'New Delhi',
                'option_b' => 'Karachi',
                'option_c' => 'Islamabad',
                'option_d' => 'Lahore',
                'answer' => 'Karachi'
            ),
            array(
                'question' => 'What is the capital of Australia?',
                'option_a' => 'New Delhi',
                'option_b' => 'Sydney',
                'option_c' => 'Melbourne',
                'option_d' => 'Brisbane',
                'answer' => 'Sydney'
            ),
            array(
                'question' => 'What is the capital of Canada?',
                'option_a' => 'New Delhi',
                'option_b' => 'Ottawa',
                'option_c' => 'Toronto',
                'option_d' => 'Vancouver',
                'answer' => 'Ottawa'
            ),
            array(
                'question' => 'What is the capital of Germany?',
                'option_a' => 'New Delhi',
                'option_b' => 'Berlin',
                'option_c' => 'Frankfurt',
                'option_d' => 'Munich',
                'answer' => 'Berlin'
            ),
            array(
                'question' => 'What is the capital of France?',
                'option_a' => 'New Delhi',
                'option_b' => 'Paris',
                'option_c' => 'Lyon',
                'option_d' => 'Marseille',
                'answer' => 'Paris'
            ),
            array(
                'question' => 'What is the capital of Italy?',
                'option_a' => 'New Delhi',
                'option_b' => 'Rome',
                'option_c' => 'Milan',
                'option_d' => 'Naples',
                'answer' => 'Rome'
            ),
            array(
                'question' => 'What is the capital of Spain?',
                'option_a' => 'New Delhi',
                'option_b' => 'Madrid',
                'option_c' => 'Barcelona',
                'option_d' => 'Valencia',
                'answer' => 'Madrid'
            ),
            array(
                'question' => 'What is the capital of Sweden?',
                'option_a' => 'New Delhi',
                'option_b' => 'Stockholm',
                'option_c' => 'Oslo',
                'option_d' => 'Copenhagen',
                'answer' => 'Stockholm'
            ),
            array(
                'question' => 'What is the capital of Norway?',
                'option_a' => 'New Delhi',
                'option_b' => 'Oslo',
                'option_c' => 'Trondheim',
                'option_d' => 'Bergen',
                'answer' => 'Oslo'
            ),
            array(
                'question' => 'What is the capital of Denmark?',
                'option_a' => 'New Delhi',
                'option_b' => 'Copenhagen',
                'option_c' => 'Aarhus',
                'option_d' => 'Kobenhavn',
                'answer' => 'Copenhagen'
            ),
            array(
                'question' => 'What is the capital of Sweden?',
                'option_a' => 'New Delhi',
                'option_b' => 'Stockholm',
                'option_c' => 'Oslo',
                'option_d' => 'Copenhagen',
                'answer' => 'Stockholm'
            ),
            array(
                'question' => 'National bird of India?',
                'option_a' => 'Peacock',
                'option_b' => 'Parrot',
                'option_c' => 'Owl',
                'option_d' => 'Eagle',
                'answer' => 'Peacock'
            ),
            array(
                'question' => 'Which one of the following is not a wild animal?',
                'option_a' => 'Bear',
                'option_b' => 'Bison',
                'option_c' => 'Jackal',
                'option_d' => 'Goat',
                'answer' => 'Goat'
            ),
            array(
                'question' => 'Roof of the forest made by the branches of the tall trees is called',
                'option_a' => 'canopy',
                'option_b' => 'crown',
                'option_c' => 'understoreys',
                'option_d' => 'none of these',
                'answer' => 'canopy'
            ),
            array(
                'question' => 'Which one of the following is not a part of the human body?',
                'option_a' => 'Eyes',
                'option_b' => 'Nose',
                'option_c' => 'Mouth',
                'option_d' => 'Tattoo',
                'answer' => 'Tattoo'
            ),
            array(
                'question' => 'Decomposers convert the dead plant and animal tissues into',
                'option_a' => 'clay',
                'option_b' => 'humus',
                'option_c' => 'inorganic debris',
                'option_d' => 'soil',
                'answer' => 'humus'
            ),
            array(
                'question' => 'Sequence that represents the series of eating and being eaten is called',
                'option_a' => 'food series',
                'option_b' => 'food chain',
                'option_c' => 'food web',
                'option_d' => 'food hub',
                'answer' => 'food chain'
            ),
            array(
                'question' => 'Land and Building owned by a firm should be classified as:',
                'option_a' => 'Fixed Assets',
                'option_b' => 'Current Assets',
                'option_c' => 'Fictitious Assets',
                'option_d' => 'None of the above',
                'answer' => 'Fixed Assets',
            ),
            array(
                'question' => 'The profit on sale of old furniture should be credited to:',
                'option_a' => 'Trading Account',
                'option_b' => 'Profit and Loss Account',
                'option_c' => 'Manufacturing Account',
                'option_d' => 'All of the above',
                'answer' => 'Profit and Loss Account',
            ),
            array(
                'question' => 'Carriage inwards is shown on:',
                'option_a' => 'Debit side of Trading Account',
                'option_b' => 'Debit side of Profit and Loss Account',
                'option_c' => 'Assets side of the Balance Sheet',
                'option_d' => ' Liabilities side of the Balance Sheet',
                'answer' => 'Debit side of Trading Account',
        
            ),
            array(
                'question' => 'Returns Outward is deducted from:',
                'option_a' => 'Sales',
                'option_b' => 'et Profit',
                'option_c' => 'Capital',
                'option_d' => 'Purchases',
                'answer' => 'Purchases',
            ),
            array(
                'question' => 'Trading Account reveals:',
                'option_a' => 'Financial Position',
                'option_b' => 'Gross Profit or Gross Loss',
                'option_c' => 'Net Profit',
                'option_d' => 'Appropriation of Profit',
                'answer' => 'Gross Profit or Gross Loss',
            ),
            array(
                'question' => 'An example of intangible asset is:',
                'option_a' => 'Machinery',
                'option_b' => 'Prepaid Insurance',
                'option_c' => 'Mine',
                'option_d' => 'Copyrights',
                'answer' => 'Copyrights',
            ),
            array(
                'question' => 'An example of fictitious asset is:',
                'option_a' => 'Patent right',
                'option_b' => 'Preliminary Expenses',
                'option_c' => 'Furniture',
                'option_d' => 'Investment',
                'answer' => 'Preliminary Expenses',
        
            ),
            array(
                'question' => 'Profit and Loss Account reveals:',
                'option_a' => 'Gross Profit',
                'option_b' => 'Net Profit or Net Loss',
                'option_c' => 'Financial position',
                'option_d' => 'Cash in Hand',
                'answer' => 'Net Profit or Net Loss',
            ),
            array(
                'question' => 'Balance Sheet of a firm shows:',
                'option_a' => 'Gross Profit',
                'option_b' => 'Sales made during the year',
                'option_c' => 'Financial position',
                'option_d' => 'Units produced during the year',
                'answer' => 'Financial position',
            ),
            array(
                'question' => 'Out of the following, the one which is the most liquid asset, is:',
                'option_a' => 'Sundry Debtors',
                'option_b' => 'Inventory',
                'option_c' => 'Prepaid Insurance',
                'option_d' => 'Cash',
                'answer' => 'Cash',
            ),
            array(
                'question' => 'Manufacturing Account reveals:',
                'option_a' => 'Financial position',
                'option_b' => 'Cost of Production',
                'option_c' => 'Gross profit',
                'option_d' => 'Net profit',
                'answer' => 'Cost of Production',
            ),
            array(
                'question' => 'Trade mark is a/an:',
                'option_a' => 'Fictitious asset',
                'option_b' => 'Intangible asset',
                'option_c' => 'Current asset',
                'option_d' => 'Liquid asset',
                'answer' => 'Intangible asset',
            ),
            array(
                'question' => 'Outstanding rent is a:',
                'option_a' => 'Representative Personal Account',
                'option_b' => 'Real Account',
                'option_c' => 'Nominal Account',
                'option_d' => 'Personal Account Balance Sheet reveals:',
                'answer' => 'Representative Personal Account',
        
            ),
            array(
                'question' => 'Balance Sheet reveals:',
                'option_a' => 'Cost of production',
                'option_b' => 'Gross profit',
                'option_c' => 'Financial position',
                'option_d' => 'Net profit',
                'answer' => 'Financial position',
            ),
            array(
                'question' => 'Selling and Administrative Expenses are shown in:',
                'option_a' => 'Profit and Loss Account',
                'option_b' => 'Trading Account',
                'option_c' => ' Manufacturing Account',
                'option_d' => 'Balance Sheet',
                'answer' => 'Profit and Loss Account',
        
            ),
            array(
                'question' => 'Which of the following is an intangible asset?',
                'option_a' => 'in-trade',
                'option_b' => 'uilding',
                'option_c' => 'Patents',
                'option_d' => 'Bank Balance',
                'answer' => 'Patents',
            ),
            array(
                'question' => 'Which of the following is a current asset?',
                'option_a' => 'Balance Sheet',
                'option_b' => 'Profit and Loss Account',
                'option_c' => 'Trading Account',
                'option_d' => 'All of the above',
                'answer' => 'Trading Account',
            ),
            array(
                'question' => 'Which of the following is an example of current liabilities?',
                'option_a' => 'Bank Loan',
                'option_b' => 'Debentures',
                'option_c' => 'Creditors',
                'option_d' => 'Owner’s Capital',
                'answer' => 'Creditors',
            ),
            array(
                'question' => 'It is necessary to make a distinction between capital and revenue items because:',
                'option_a' => 'It is helpful to assess financial position',
                'option_b' => 'It is helpful in calculating true profit or loss',
                'option_c' => 'It is required by accounting principles',
                'option_d' => 'of the above',
                'answer' => 'All of the above',
            ),
            array(
                'question' => 'Expenditure of installation of a new machinery is:',
                'option_a' => 'Capital expenditure',
                'option_b' => 'Revenue expenditure:',
                'option_c' => 'Deferred Revenue expenditure',
                'option_d' => 'Recurring expenditure',
                'answer' => 'Capital expenditure',
            ),
            array(
                'question' => 'Heavy advertisement expenditure is an example of:',
                'option_a' => 'Revenue Expenditure',
                'option_b' => 'Capital Expenditure',
                'option_c' => 'Deferred Revenue Expenditure',
                'option_d' => 'All of the above',
                'answer' => 'Deferred Revenue Expenditure',
            ),
            array(
                'question' => 'Which of the following is not a revenue receipt?',
                'option_a' => 'Discount received',
                'option_b' => 'Sales made',
                'option_c' => 'Sale of Plant',
                'option_d' => ' Commission',
                'answer' => 'Sale of Plant',
            ),
            array(
                'question' => 'Which liability is not shown in Balance Sheet?',
                'option_a' => 'Contingent Liability',
                'option_b' => 'Current Liability',
                'option_c' => ' Long-term Liability',
                'option_d' => 'None of the above',
                'answer' => 'Contingent Liability',
            ),
            array(
                'question' => 'Which of the following is not deducted from capital?',
                'option_a' => 'Loss',
                'option_b' => 'Drawings',
                'option_c' => 'Loan',
                'option_d' => 'Income Tax',
                'answer' => 'Loan',
            ),
        );
        $categoryId = QuestionCategory::all()->pluck('id')->toArray();
        $size = count($categoryId);
        $start = 0;
        foreach ($questions as $question) {
            if($start === $size) {
                $start = 0;
            }
            $quizQuestion = new QuizQuestion();
            $quizQuestion->category_id = $categoryId[$start++];
            $quizQuestion->question = $question['question'];
            $quizQuestion->option_a = $question['option_a'];
            $quizQuestion->option_b = $question['option_b'];
            $quizQuestion->option_c = $question['option_c'];
            $quizQuestion->option_d = $question['option_d'];
            $quizQuestion->answer = $question['answer'];
            $quizQuestion->save();
        }
    }
}