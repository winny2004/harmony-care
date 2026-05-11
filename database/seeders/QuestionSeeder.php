<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Question;

class QuestionSeeder extends Seeder
{
    /**
     * Seed the application's database with questions.
     */
    public function run(): void
    {
        // Family Social Factor - Section 1: Family Social (12 pertanyaan dengan skala likert 1-5)
        $familySocialQuestions = [
            [
                'type' => 'family_social',
                'section' => 'family_social',
                'scale_type' => 'likert_5',
                'question_text' => 'Keluarga saya benar-benar berusaha membantu saya',
                'order' => 1,
            ],
            [
                'type' => 'family_social',
                'section' => 'family_social',
                'scale_type' => 'likert_5',
                'question_text' => 'Saya mendapatkan bantuan dan dukungan emosional yang saya butuhkan dari keluarga saya',
                'order' => 2,
            ],
            [
                'type' => 'family_social',
                'section' => 'family_social',
                'scale_type' => 'likert_5',
                'question_text' => 'Saya dapat membicarakan masalah saya dengan keluarga saya',
                'order' => 3,
            ],
            [
                'type' => 'family_social',
                'section' => 'family_social',
                'scale_type' => 'likert_5',
                'question_text' => 'Keluarga bersedia membantu saya membuat keputusan',
                'order' => 4,
            ],
            [
                'type' => 'family_social',
                'section' => 'family_social',
                'scale_type' => 'likert_5',
                'question_text' => 'Teman-teman saya benar-benar berusaha membantu saya',
                'order' => 5,
            ],
            [
                'type' => 'family_social',
                'section' => 'family_social',
                'scale_type' => 'likert_5',
                'question_text' => 'Saya dapat mengandalkan teman-teman saya ketika terjadi masalah',
                'order' => 6,
            ],
            [
                'type' => 'family_social',
                'section' => 'family_social',
                'scale_type' => 'likert_5',
                'question_text' => 'Saya memiliki teman yang bisa diajak berbagi suka dan duka',
                'order' => 7,
            ],
            [
                'type' => 'family_social',
                'section' => 'family_social',
                'scale_type' => 'likert_5',
                'question_text' => 'Saya dapat membicarakan masalah saya dengan teman-teman saya',
                'order' => 8,
            ],
            [
                'type' => 'family_social',
                'section' => 'family_social',
                'scale_type' => 'likert_5',
                'question_text' => 'Ada orang spesial yang selalu ada saat saya membutuhkan',
                'order' => 9,
            ],
            [
                'type' => 'family_social',
                'section' => 'family_social',
                'scale_type' => 'likert_5',
                'question_text' => 'Ada orang yang spesial yang bisa saya ajak berbagi suka dan duka',
                'order' => 10,
            ],
            [
                'type' => 'family_social',
                'section' => 'family_social',
                'scale_type' => 'likert_5',
                'question_text' => 'Saya memiliki seseorang yang istimewa yang merupakan sumber kenyamanan bagi saya',
                'order' => 11,
            ],
            [
                'type' => 'family_social',
                'section' => 'family_social',
                'scale_type' => 'likert_5',
                'question_text' => 'Ada orang spesial dalam hidup saya yang peduli dengan perasaan saya',
                'order' => 12,
            ],
        ];

        // Family Social Factor - Section 2: DASS-21 (21 pertanyaan dengan skala 0-3)
        $dass21Questions = [
            [
                'type' => 'family_social',
                'section' => 'dass21',
                'scale_type' => 'dass21',
                'question_text' => 'Saya merasa sulit untuk menenangkan diri',
                'order' => 1,
            ],
            [
                'type' => 'family_social',
                'section' => 'dass21',
                'scale_type' => 'dass21',
                'question_text' => 'Saya cenderung bereaksi berlebihan terhadap situasi',
                'order' => 2,
            ],
            [
                'type' => 'family_social',
                'section' => 'dass21',
                'scale_type' => 'dass21',
                'question_text' => 'Saya merasa bahwa saya sering gugup',
                'order' => 3,
            ],
            [
                'type' => 'family_social',
                'section' => 'dass21',
                'scale_type' => 'dass21',
                'question_text' => 'Saya mendapati diri saya gelisah',
                'order' => 4,
            ],
            [
                'type' => 'family_social',
                'section' => 'dass21',
                'scale_type' => 'dass21',
                'question_text' => 'Saya merasa kesulitan untuk bersantai',
                'order' => 5,
            ],
            [
                'type' => 'family_social',
                'section' => 'dass21',
                'scale_type' => 'dass21',
                'question_text' => 'Saya tidak toleran terhadap apa pun yang menghalangi saya untuk melanjutkan apa yang sedang saya kerjakan',
                'order' => 6,
            ],
            [
                'type' => 'family_social',
                'section' => 'dass21',
                'scale_type' => 'dass21',
                'question_text' => 'Saya merasa saya agak sensitif',
                'order' => 7,
            ],
            [
                'type' => 'family_social',
                'section' => 'dass21',
                'scale_type' => 'dass21',
                'question_text' => 'Saya merasakan kekeringan pada mulut saya',
                'order' => 8,
            ],
            [
                'type' => 'family_social',
                'section' => 'dass21',
                'scale_type' => 'dass21',
                'question_text' => 'Saya mengalami kesulitan bernapas (misalnya, napas yang terlalu cepat, sesak napas saat tidak melakukan aktivitas fisik)',
                'order' => 9,
            ],
            [
                'type' => 'family_social',
                'section' => 'dass21',
                'scale_type' => 'dass21',
                'question_text' => 'Saya mengalami gemetar (misalnya di tangan)',
                'order' => 10,
            ],
            [
                'type' => 'family_social',
                'section' => 'dass21',
                'scale_type' => 'dass21',
                'question_text' => 'Saya khawatir tentang situasi di mana saya mungkin panik dan mempermalukan diri saya sendiri',
                'order' => 11,
            ],
            [
                'type' => 'family_social',
                'section' => 'dass21',
                'scale_type' => 'dass21',
                'question_text' => 'Saya merasa hampir panik',
                'order' => 12,
            ],
            [
                'type' => 'family_social',
                'section' => 'dass21',
                'scale_type' => 'dass21',
                'question_text' => 'Saya menyadari tindakan jantung saya tanpa adanya aktivitas fisik (misalnya, rasa detak jantung meningkat, jantung tidak berdetak)',
                'order' => 13,
            ],
            [
                'type' => 'family_social',
                'section' => 'dass21',
                'scale_type' => 'dass21',
                'question_text' => 'Saya merasa takut tanpa alasan yang jelas',
                'order' => 14,
            ],
            [
                'type' => 'family_social',
                'section' => 'dass21',
                'scale_type' => 'dass21',
                'question_text' => 'Saya tidak bisa merasakan perasaan positif sama sekali',
                'order' => 15,
            ],
            [
                'type' => 'family_social',
                'section' => 'dass21',
                'scale_type' => 'dass21',
                'question_text' => 'Saya merasa sulit untuk mengambil inisiatif untuk melakukan sesuatu',
                'order' => 16,
            ],
            [
                'type' => 'family_social',
                'section' => 'dass21',
                'scale_type' => 'dass21',
                'question_text' => 'Saya merasa tidak ada yang bisa saya nantikan',
                'order' => 17,
            ],
            [
                'type' => 'family_social',
                'section' => 'dass21',
                'scale_type' => 'dass21',
                'question_text' => 'Saya merasa sedih dan sedih sekali',
                'order' => 18,
            ],
            [
                'type' => 'family_social',
                'section' => 'dass21',
                'scale_type' => 'dass21',
                'question_text' => 'Saya tidak mampu untuk menjadi antusias terhadap apa pun',
                'order' => 19,
            ],
            [
                'type' => 'family_social',
                'section' => 'dass21',
                'scale_type' => 'dass21',
                'question_text' => 'Saya merasa tidak terlalu berharga sebagai manusia',
                'order' => 20,
            ],
            [
                'type' => 'family_social',
                'section' => 'dass21',
                'scale_type' => 'dass21',
                'question_text' => 'Saya merasa hidup ini tidak berarti',
                'order' => 21,
            ],
        ];

        // Insert Family Social Questions
        foreach ($familySocialQuestions as $question) {
            Question::create($question);
        }

        // Insert DASS-21 Questions
        foreach ($dass21Questions as $question) {
            Question::create($question);
        }
    }
}
