<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //FAQ1
        DB::table('faq')->insert([
            'question' => 'How can you print a document from your laptop at HZ?',
            'answer' => 'First you need to connect to the printer. Then select the file and click on Print. Now you have requested a print job. Once the print job has been requested you must register using your HZ pass on the TouchID next to the multifunctional printer. Next, select printer option Print / Afdrukken. In the menu, select the multifunctional printer to where the job has been sent. Next, you can see which printer job is ready to be printed. The print job is the completed provided there is sufficient credit on your printing account. When the printing is completed, press Stop on the TouchID, followed by Logout.'
        ]);

        //FAQ2
        DB::table('faq')->insert([
            'question' => 'How can you scan a document a send it to your laptop at HZ?',
            'answer' => 'First ensure you have at least €0.07 credit on your HZ pass. Although scanning is free, you must have this amount of credit on your HZ pass. Next, Register using your HZ pass on the TouchID next to the multifunctional printer. In the TouchID menu, select option Scanning - Scan. Then, lay the original sheet on the feeder or glass plate. Press Scan and Send. Press Scan to me. Press Yes. Press the Start button. Then, press the green Start button on the printer to scan page by page. Once this is ready, press Start Sending. When scanning is completed, press Stop on the TouchID, followed by Logout.'
        ]);

        //FAQ3
        DB::table('faq')->insert([
            'question' => 'What do you do when you are sick / show symptoms of COVID?',
            'answer' => 'If a student has symptoms such as a cold, cough, fever or sudden loss of smell or taste, they need to stay home. The roommates and family of that student need to stay home as well. Everyone can get tested with an appointment made via 0800-1202 or via coronatest.nl for free. That information has to reach the program coordinator and for international students the international office via email at internationaloffice@hz.nl.'
        ]);

        //FAQ4
        DB::table('faq')->insert([
            'question' => 'How can you book a project space in one of the wings?',
            'answer' => 'You can book a room on the HZ page by logging in to your HZ Portal and then pressing the "Selfservice Portal" under your Personal Menu, and then selecting "Make a reservation".'
        ]);

        //FAQ5
        DB::table('faq')->insert([
            'question' => 'What are the instructions if you want to park your car at the HZ parking lot?',
            'answer' => 'Free parking is possible on the car park of PZEM at the Poelendaelesingel 10 in Middelburg. Students and staff can only enter by presenting their HZ pass at the barriers, guests can ring the bell at the barrier. After passing the barrier, follow the signs to the HZ parking places, marked with a white sign with the HZ logo.'
        ]);
    }
}
