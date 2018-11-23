<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('products')->delete();
        
        \DB::table('products')->insert(array (
            0 => 
            array (
                'id' => 1,
                'product_name' => 'Honor 7',
            'small_desc' => '<div class="_3WHvuP"><ul><li class="_2-riNZ">3 GB RAM | 32 GB ROM | Expandable Upto 256 GB</li><li class="_2-riNZ">14.48 cm (5.7 inch) HD+ Display</li><li class="_2-riNZ">13MP + 2MP | 8.0MP Front Camera</li><li class="_2-riNZ">3000 mAh Battery</li><li class="_2-riNZ">Qualcomm Snapdragon Octa Core Processor</li></ul></div>',
                'price' => 2000,
                'detailed_desc' => '<div class="bhgxx2 col-12-12"><div class="_1QrSNG"><div class="_2HVvN7">Product Description</div><div class="_3u-uqB">Capture life in all its beauty and do a lot more with the Honor 7A smartphone. Its commendable rear and front cameras let you document those beautiful moments in stunning clarity and color and you can watch them on its 14.47 cm FullView Display. You can even unlock this phone just by glancing at it.
</div></div><div class="_38NXIU"><div class="_3LyGPp _2briKY"><div><div><div class="Pk2voS _2XGBfy _2SuWq2"><img src="https://rukminim1.flixcart.com/image/200/200/jhi0l8w0/mobile/3/g/f/honor-7a-v100r001-aum-al20-original-imaf5g24ssxcggnq.jpeg?q=90" style="max-width:100%;vertical-align:middle"></div><div><div class="_2THx53">Stunning Rear Camera - 13 MP + 2MP Dual Lens Camera</div><div class="_1aK10F"><p>This smartphone’s camera lets you take beautiful pictures with realistic depth-of-field effects. The hardware-level bokeh feature ensures the focus is on your loved ones and the things you love.</p>
</div></div></div></div></div></div><div class="_38NXIU"><div class="_3LyGPp _2briKY"><div><div><div class="Pk2voS _8Uh6-B _2SuWq2"><img src="https://rukminim1.flixcart.com/image/200/200/jhi0l8w0/mobile/3/g/f/honor-7a-v100r001-aum-al20-original-imaf5g24qhsamuy3.jpeg?q=90" style="max-width:100%;vertical-align:middle"></div><div><div class="_2THx53">Flattering 8 MP Front Camera</div><div class="_1aK10F"><p>This front camera comes with a wide aperture of f/2.2 and the Advanced Adjustable Selfie Toning Light to let you capture beautiful selfies, even in low-light conditions. </p>
</div></div></div></div></div></div><div class="_38NXIU"><div class="_3LyGPp _2briKY"><div><div><div class="Pk2voS _2XGBfy _2SuWq2"><img src="https://rukminim1.flixcart.com/image/200/200/jhi0l8w0/mobile/3/g/f/honor-7a-v100r001-aum-al20-original-imaf5g24dmdpvtzy.jpeg?q=90" style="max-width:100%;vertical-align:middle"></div><div><div class="_2THx53">14.47 cm Honor FullView Display</div><div class="_1aK10F"><p>Be it for watching videos or playing games, this bezel-less display with a cinematic 18:9 aspect ratio delivers an immersive experience.</p>
</div></div></div></div></div></div><div class="_38NXIU"><div class="_3LyGPp _2briKY"><div><div><div class="Pk2voS _8Uh6-B _2SuWq2"><img src="https://rukminim1.flixcart.com/image/200/200/jhi0l8w0/mobile/3/g/f/honor-7a-v100r001-aum-al20-original-imaf5g24b5urzkmz.jpeg?q=90" style="max-width:100%;vertical-align:middle"></div><div><div class="_2THx53">Face Unlock</div><div class="_1aK10F"><p>This feature recognises your face to unlock your phone in a jiffy. Alternatively, you can also use the Fingerprint Unlock feature to open the phone.</p>
</div></div></div></div></div></div><div class="_38NXIU"><div class="_3LyGPp _2briKY"><div><div><div class="Pk2voS _2XGBfy _2SuWq2"><img src="https://rukminim1.flixcart.com/image/200/200/jhi0l8w0/mobile/3/g/f/honor-7a-v100r001-aum-al20-original-imaf5g24nhqhefgm.jpeg?q=90" style="max-width:100%;vertical-align:middle"></div><div><div class="_2THx53">Dual SIM and microSD Support</div><div class="_1aK10F"><p>With 2 SIM card slots and a microSD card slot, you can now use 2 different SIM cards (for calls and data) and store your files, images, videos and much more on the microSD card. </p>
</div></div></div></div></div></div><div class="_38NXIU"><div class="_3LyGPp _2briKY"><div><div><div class="Pk2voS _8Uh6-B _2SuWq2"><img src="https://rukminim1.flixcart.com/image/200/200/jhi0l8w0/mobile/3/g/f/honor-7a-v100r001-aum-al20-original-imaf5g24wzf85r9q.jpeg?q=90" style="max-width:100%;vertical-align:middle"></div><div><div class="_2THx53">The Smarter Life - EMUI 8.0</div><div class="_1aK10F"><p>The iAware2.0 Smart Management offers a smooth user experience by intelligently detecting user behaviour - it boosts system efficiency (by 20%) and frees up more internal storage. EMUI 8.0 - based on Android 8.0 - gives you a range of functional smart features, such as the Navigation Dock, Three-finger Screenshot, One-click split and much more. It is powered by an impressive Octa-core Snapdragon processor, along with 3 GB of RAM, to give you a seamless experience.</p>
</div></div></div></div></div></div><div class="_38NXIU"><div class="_3LyGPp _2briKY"><div><div><div class="Pk2voS _2XGBfy _2SuWq2"><img src="https://rukminim1.flixcart.com/image/200/200/jhi0l8w0/mobile/3/g/f/honor-7a-v100r001-aum-al20-original-imaf5g24zhqyjxpm.jpeg?q=90" style="max-width:100%;vertical-align:middle"></div><div><div class="_2THx53">Ride Mode</div><div class="_1aK10F"><p>Activate this mode to keep distractions at bay while riding your bike.</p>
</div></div></div></div></div></div><div class="_38NXIU"><div class="_3LyGPp _2briKY"><div><div><div class="Pk2voS _8Uh6-B _2SuWq2"><img src="https://rukminim1.flixcart.com/image/200/200/jhi0l8w0/mobile/3/g/f/honor-7a-v100r001-aum-al20-original-imaf5g24byfdhafm.jpeg?q=90" style="max-width:100%;vertical-align:middle"></div><div><div class="_2THx53">Powerful Speakers</div><div class="_1aK10F"><p>The high-power SMART PA Amplifier and Turbo-charged Speakers deliver audio as loud as 88 dB to create an immense and penetrating sound. The Party Mode lets you create a surround-sound speaker array by connecting up to six Honor 7A devices to play music loudly.</p>
</div></div></div></div></div></div><div class="_38NXIU"><div class="_3LyGPp _2briKY"><div><div><div class="Pk2voS _2XGBfy _2SuWq2"><img src="https://rukminim1.flixcart.com/image/200/200/jhi0l8w0/mobile/3/g/f/honor-7a-v100r001-aum-al20-original-imaf5g24zeutzqxw.jpeg?q=90" style="max-width:100%;vertical-align:middle"></div><div><div class="_2THx53">Karaoke on the Go</div><div class="_1aK10F"><p>This smartphone offers Real-time Audio Monitoring through your earbuds and supports SWS3.1 Virtual Bass. It lets you hear your own voice while you are recording your singing so you get that recording studio experience.</p>
</div></div></div></div></div></div><div class="_38NXIU"><div class="_3LyGPp _2briKY"><div><div><div class="Pk2voS _8Uh6-B _2SuWq2"><img src="https://rukminim1.flixcart.com/image/200/200/jhi0l8w0/mobile/3/g/f/honor-7a-v100r001-aum-al20-original-imaf5g244rgqh3vr.jpeg?q=90" style="max-width:100%;vertical-align:middle"></div><div><div class="_2THx53">Dual Bluetooth</div><div class="_1aK10F"><p>You can wirelessly connect up to two devices via Bluetooth at the same time.</p>
</div></div></div></div></div></div></div>',
                'file_bucket_id' => 1,
                'created_at' => '2018-11-22 14:50:18',
                'updated_at' => '2018-11-22 14:50:18',
            ),
        ));
        
        
    }
}