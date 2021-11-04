
<?php 
include 'database/db.php';
$getIp = $_SERVER['REMOTE_ADDR'];
if($getIp == '78.185.172.41'){
    exit();
}else{
    $addData = " INSERT INTO users(ip) VALUES ('$getIp') ";
    mysqli_query($db,$addData);
    if(!$addData){
        echo 'error_data';
    }
}



?>
<!--========== SWIPER SLIDER ==========-->
<div class="s-swiper js__swiper-one-item">
    <!-- Arrows -->
    <a href="javascript:void(0);" class="s-swiper__arrow-v1--right s-icon s-icon--md s-icon--white-brd g-radius--circle ti-angle-right js__swiper-btn--next"></a>
    <a href="javascript:void(0);" class="s-swiper__arrow-v1--left s-icon s-icon--md s-icon--white-brd g-radius--circle ti-angle-left js__swiper-btn--prev"></a>
    <!-- End Arrows -->

            <!--<a href="#js__scroll-to-section" class="s-scroll-to-section-v1--bc g-margin-b-15--xs">
                <span class="g-font-size-18--xs g-color--dark ti-angle-double-down"></span>
                <p class="text-uppercase g-color--dark g-letter-spacing--3 g-margin-b-0--xs">Learn More</p>
            </a>-->
            <!-- Swiper Wrapper -->
            
            <div class="swiper-wrapper">
                <div class="g-fullheight--xs g-bg-position--center swiper-slide" style="background: url('assets/img/kabe.jpg');">
                    <div class="container g-margin-t-70--xs g-text-center--xs g-ver-center--xs">
                        <div class="g-margin-b-30--xs">
                            <h3 class="g-font-size-15--xs g-font-size-15--sm g-font-size-30--md goldColor">"Ben (Allah cc) cinleri ve insanları ancak bana ibadet <br>etsinler diye yarattım"(Zariyat:56)</h3>
                        </div>
                        <a class="js__popup__youtube" href="" title="Intro Video">
                            <i class="s-icon s-icon--lg s-icon--white-bg g-radius--circle ti-control-play"></i>
                        </a>
                    </div>
                </div>
                <div class="g-fullheight--xs g-bg-position--center swiper-slide" style="background: url('assets/img/kuran.jpg');">
                    <div class="container g-text-center--xs g-ver-center--xs">
                        <div class="g-margin-b-30--xs">
                            <div class="g-margin-b-30--xs">
                                <h2 class="g-font-size-12--xs g-font-size-12--sm g-font-size-26--md slideTwo text-left">
                                    Yaratan Rabbinin adıyla oku !<br>
                                    O, insanı bir Alak'tan(kan pıhtısı) yarattı.<br>
                                    Oku Rabbin sonsuz kerem sahibidir.<br>
                                    O Rab ki, kalemle yazmayı öğretti.<br>
                                    İnsana bilmediği şeyleri öğretti. <br>(Alak Suresi:1-5)<br>
                                </h2>
                            </div>
                            <a class="js__popup__youtube" href="" title="Intro Video">
                                <i class="s-icon s-icon--lg s-icon--white-bg g-radius--circle ti-control-play"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--========== END SWIPER SLIDER ==========-->

        <!-- End Swiper Wrapper -->
        <!--========== PAGE CONTENT ==========-->
        <!-- Features -->
        <div id="js__scroll-to-section" class="container g-padding-y-80--xs g-padding-y-125--sm">

        </div>
        <!-- End Features -->
        <div class="js__parallax-window" style="background: url(assets/img/kabeSlider.jpg) 50% 0 no-repeat fixed;">
            <div class="container g-text-center--xs g-padding-y-80--xs g-padding-y-125--sm">
                <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--white-opacity g-letter-spacing--2 g-margin-b-50--xs"></p>
                <div class="s-swiper js__swiper-testimonials">
                    <!-- Swiper Wrapper -->
                    <div class="swiper-wrapper g-margin-b-50--xs">
                        <div class="swiper-slide g-padding-x-130--sm g-padding-x-150--lg">
                            <div class="g-padding-x-20--xs g-padding-x-50--lg">
                                <div class="g-margin-b-40--xs">
                                    <p class="g-font-size-22--xs g-font-size-28--sm g-color--white"><i>Musallattan korunmak için yol haritası. Bu ayetleri sırasıyla ezberleyip okumak muhafaza olmamızı sağlar.

                                    </i></p>
                                </div>
                                <div class="center-block g-hor-divider__solid--white-opacity-lightest g-width-100--xs g-margin-b-30--xs"></div>
                                <h4 class="g-font-size-15--xs g-font-size-18--sm g-color--white-opacity-light g-margin-b-5--xs">
                                </h4>
                            </div>
                        </div>
                        <div class="swiper-slide g-padding-x-130--sm g-padding-x-150--lg">  
                            <div class="g-padding-x-20--xs g-padding-x-50--lg">
                                <div class="g-margin-b-40--xs">
                                    <p class="g-font-size-22--xs g-font-size-28--sm g-color--white"><i>Kovulmuş şeytanın şerrinden Semi (İşiten) ve Alim (Bilen) Allah'a sığınırım, Rahman ve Rahim olan Allah'ın adıyla.

                                    </i></p>
                                </div>
                                <div class="center-block g-hor-divider__solid--white-opacity-lightest g-width-100--xs g-margin-b-30--xs"></div>
                                <h4 class="g-font-size-15--xs g-font-size-18--sm g-color--white-opacity-light g-margin-b-5--xs">Azim olan Allah doğru söyledi.
                                </h4>
                            </div>
                        </div>
                        <div class="swiper-slide g-padding-x-130--sm g-padding-x-150--lg">
                            <div class="g-padding-x-20--xs g-padding-x-50--lg">
                                <div class="g-margin-b-40--xs">
                                    <p class="g-font-size-22--xs g-font-size-28--sm g-color--white"><i>Eğer şeytandan bir vesvese, bir kışkırtma gelirse hemen Allah'a sığın. Muhakkak ki, Allah hakkıyla işiten, ve kemaliyle bilendir.
                                    </i></p>
                                </div>
                                <div class="center-block g-hor-divider__solid--white-opacity-lightest g-width-100--xs g-margin-b-30--xs"></div>
                                <h4 class="g-font-size-15--xs g-font-size-18--sm g-color--white-opacity-light g-margin-b-5--xs">Araf:200 / Azim olan Allah doğru söyledi.
                                </h4>
                            </div>
                        </div>
                        <div class="swiper-slide g-padding-x-130--sm g-padding-x-150--lg">
                            <div class="g-padding-x-20--xs g-padding-x-50--lg">
                                <div class="g-margin-b-40--xs">
                                    <p class="g-font-size-22--xs g-font-size-28--sm g-color--white"><i>Eğer şeytandan gelecek kötü bir düşünce seni dürtecek olursa hemen Allah'a sığın. Çünkü o herşeyi işitir ve bilir.
                                    </i></p>
                                </div>
                                <div class="center-block g-hor-divider__solid--white-opacity-lightest g-width-100--xs g-margin-b-30--xs"></div>
                                <h4 class="g-font-size-15--xs g-font-size-18--sm g-color--white-opacity-light g-margin-b-5--xs">Fussilet:36 / Azim olan Allah doğru söyledi.
                                </h4>
                            </div>
                        </div>
                        <div class="swiper-slide g-padding-x-130--sm g-padding-x-150--lg">
                            <div class="g-padding-x-20--xs g-padding-x-50--lg">
                                <div class="g-margin-b-40--xs">
                                    <p class="g-font-size-22--xs g-font-size-28--sm g-color--white"><i>De ki: Rabbim! şeytanların kışkırtmalarından sana sığınırım! 98: Onların yanımda bulunmalarında da sana sığınırım.
                                    </i></p>
                                </div>
                                <div class="center-block g-hor-divider__solid--white-opacity-lightest g-width-100--xs g-margin-b-30--xs"></div>
                                <h4 class="g-font-size-15--xs g-font-size-18--sm g-color--white-opacity-light g-margin-b-5--xs">Müminun:97 / Azim olan Allah doğru söyledi.
                                </h4>
                            </div>
                        </div>
                        <div class="swiper-slide g-padding-x-130--sm g-padding-x-150--lg">
                            <div class="g-padding-x-20--xs g-padding-x-50--lg">
                                <div class="g-margin-b-40--xs">
                                    <p class="g-font-size-22--xs g-font-size-28--sm g-color--white"><i>De ki: Sabahın Rabbine sığınırım, 2: Yarattığı şeylerin şerrinden,  3: Karanlık çöktüğü zaman gecenin şerrinden, 4: Düğümlere üfleyen büyücülerin şerrinden, 5: Ve haset ettiği zaman hasetçinin şerrinden.
                                    </i></p>
                                </div>
                                <div class="center-block g-hor-divider__solid--white-opacity-lightest g-width-100--xs g-margin-b-30--xs"></div>
                                <h4 class="g-font-size-15--xs g-font-size-18--sm g-color--white-opacity-light g-margin-b-5--xs">Felak:1 / Azim olan Allah doğru söyledi.
                                </h4>
                            </div>
                        </div>
                        <div class="swiper-slide g-padding-x-130--sm g-padding-x-150--lg">
                            <div class="g-padding-x-20--xs g-padding-x-50--lg">
                                <div class="g-margin-b-40--xs">
                                    <p class="g-font-size-22--xs g-font-size-28--sm g-color--white"><i>De ki: Ben insanların Rabbine sığınırım, 2: İnsanların sahibine, 3: İnsanların gerçek İlahına, 4: O sinsi vesvesecinin şerrinden, 5: O ki; insanların göğüslerine vesveseler fısıldar, 6: Gerek cinlerden, gerek insanlardan,

                                    </i></p>
                                </div>
                                <div class="center-block g-hor-divider__solid--white-opacity-lightest g-width-100--xs g-margin-b-30--xs"></div>
                                <h4 class="g-font-size-15--xs g-font-size-18--sm g-color--white-opacity-light g-margin-b-5--xs">Nas:1 / Azim olan Allah doğru söyledi.
                                </h4>
                            </div>
                        </div>
                    </div>
                    <!-- End Swipper Wrapper -->

                    <!-- Arrows -->
                    <div class="g-font-size-22--xs g-color--white-opacity js__swiper-fraction"></div>
                    <a href="javascript:void(0);" class="g-display-none--xs g-display-inline-block--sm s-swiper__arrow-v1--right s-icon s-icon--md s-icon--white-brd g-radius--circle ti-angle-right js__swiper-btn--next"></a>
                    <a href="javascript:void(0);" class="g-display-none--xs g-display-inline-block--sm s-swiper__arrow-v1--left s-icon s-icon--md s-icon--white-brd g-radius--circle ti-angle-left js__swiper-btn--prev"></a>
                    <!-- End Arrows -->
                </div>
            </div>
        </div>
        <!-- End Testimonials -->
        

        <!-- Culture -->
        <div class="g-promo-section">
            <div class="container g-padding-y-80--xs g-padding-y-125--sm">
                <div class="row">
                    <div class="col-md-4 g-margin-t-15--xs g-margin-b-60--xs g-margin-b-0--lg">
                        <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-25--xs"><i class="fab fa-canadian-maple-leaf g-font-size-40--md g-font-size-40--xs"></i></p>
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".1s">
                            <h2 class="g-font-size-20--xs g-font-size-30--sm g-font-size-40--md">
                                Ruhsal ve Psikolojik
                                Sıkıntıları Olan Hastalar
                            </h2>
                        </div>
                    </div>
                    <div class="col-md-4 col-md-offset-1">
                        <p class="g-font-size-18--xs">Büyü ve cin musallatına maruz kaldığınızdan şüpheleniyorsanız sitemizde bu konu ile ilgili bilgileri dikkatle okumanızı tavsiye ediyoruz.  </p>
                        <p class="g-font-size-18--xs">Sitemizde büyü-cin musallatının sebepleri, sonuçları ve nasıl tedavi edileceği ile ilgili bilgileri bulacaksınız. Bu konu ile ilgili tecrübemiz ve şifa etkinliğimizden faydalanarak inşallah sıkıntılarınızdan kurtulacaksınız.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 g-promo-section__img-right--lg g-bg-position--center g-height-100-percent--md js__fullwidth-img">
                <img class="img-responsive" src="assets/img/quran.jpg" alt="Image">
            </div>
        </div>
        <!-- End Culture -->

        
        <!-- Portfolio Filter -->
        <div class="container g-padding-y-40--xs">
            <div class="g-text-center--xs g-margin-b-5--xs">
                <h2 class="g-font-size-32--xs g-font-size-36--md">Lütfen Aşağıdaki Ön Bilgileri Okuyunuz!</h2>
            </div>
        </div>
        <div class="container g-padding-y-20--xs">
            <div class="g-text-center--xs g-margin-b-40--xs anasayfaYazi">
                <p>Lütfen Aşağıdaki Ön Bilgileri Okuyunuz!</p>
                <p>Sizlerden çok önemli bir ricamız var; Biz sitemizde gaybi bir hakikat olan büyü ve cin musallatı ile ilgili, Kur'an'a uygun doğru bilgileri Aziz ül Hakim olan Yüce Allah'ın yardımı, kabiliyetimiz ve tecrübelerimiz oranında sizlere aktarmaya çalıştık. Çünkü bu konu, toplumumuzda genel olarak söylenti ve hurafeler ile izah edilmekte ve inanılmaktadır. Bu tür bilgiler çok yanlış ve tehlikeli olup, özellikle musallattan muzdarip olan hastaların iyileşmesini geciktirmekte veya önlemektedir. Bu nedenle sitemizdeki tüm bilgileri çok dikkatle okuyarak bu konuda kendinizi doğru bilgiler ile iyice şuurlandırınız. Lütfen sabredin ve tamamını okuyun. Okumayan öğrenemez, bilgilenemez. Bilgisi olmayanın yapabilecekleri kısıtlıdır, kısırdır ve genellikle hata yapar. Özellikle bela, musibet ve hastalıklara karşı zayıf veya yetersiz kalır, yes'e ve ümitsizliğe düşerek kendini bırakır ve bitirir.</p>
                <p>Yüce Allah Kur'an'da şöyle buyurmuştur; "Cinleri de daha önce insan vücudunun gözeneklerinden geçebilen güçlü bir ateşten yarattık." (Hicr/27) Cin, Allah'ın hava ile karışık alevli ateşten yaratmış olduğu, insanların gözle göremediği bir varlıktır. Cinler göremediğimiz, onların bizi gördüğü gizli (görünmeyen) şuurlu yaratıklardır. Yeryüzünde bizimle birlikte yaşarlar.</p>
                <p>Cinler, enerjiden yaratılması nedeniyle yapısal özellikleri gereği, insan bedenine girebilme, nüfuz edebilme özellikleri vardır. Cinlerin insan bedenine girmesine "Cin dokunması veya çarpması" denilmektedir (Bakara 275, Kamer 9). Bunu kafir cinler yaparlar. Cinlerin kafir taifesi olan şeytanlar, İblisten emir aldıkları için insanlara temas ederek ruhsal, psikolojik hastalıklara ve davranış bozukluğuna yol açarlar. İnsanları gerçek hayattan koparıp toplumla uyumunu bozarak, hastalıklı bir ruh haliyle yaşamaları için çalışırlar. İnsanların beynine yerleşip  akıl bozukluğu, ileri safhada da delilik meydana getirirler. </p>
                <p>Tıp biliminin sebebini  açıklayamadığı psikolojik-ruhsal hastalıkların sebebi cin musallatıdır. Musallatın etkisiyle, özellikle ruhsal ve buna bağlı olan beyinsel faaliyetler bozularak, duygu, düşünce ve eylemlerimiz şeytanın tesiri altında kalır ve yönlendirilir. Bu yönlendirme ile kişisel ve sosyal hayatımızı olumsuz yönde etkileyen davranış bozukluklarının ortaya çıkmasını istemektedirler. Böylece ele geçirdikleri insanın yaşadığı  gerçek  hayatla uyumunu bozarak, ruhen ve bedenen hastalandırmakta, hata yapan, kabahat hatta suç işleyen bir kişiliğe sahip olmasını sağlayarak, insanın dünyevi ve uhrevi bakımdan helak olmasını isterler. </p>
                <p>Cinler insanlara daha ziyade ruhsal yönden tesir ederler. Başlangıçta bizimle rüyalarımızda iletişime geçerler. Özellikle rüyalarımızdaki yaşanılan korkulu, sıkıntılı ve koşullandırıcı senaryoları  hem duygusal değişime uğratmak, hem de kişilik özelliklerimize karıştırmak istedikleri bazı kötü-yanlış alışkanlık ve davranışları da kazandırmak için kurgularlar. Cinlerin inançsız kafir olan ve şeytan denilen kesimi insanların düşmanı olduğundan, özellikle ruhsal dengenin bozulması ve psikolojik rahatsızlıkların ortaya çıkması için insanlarda düşünsel, duygusal yükleme (vesvese, fit) faaliyetlerini gerçekleştirirler. Musallat ile insanların bilinçlerini ele geçirmeye ve benliklerini pasifleştirerek bizi kendi benlikleri ile yönetmeye başlarlar. İnsanları gerçek hayattan kopararak delirtirler. Bu durumdaki insanlara görünür ve onlar ile konuşurlar.</p>
                <p>Cin çarpmasına, yani musallata uğrayan insan, beyni veya kulaklarıyla bir takım sesler-konuşmalar duyar. Beyinde uğultu, kulak çınlaması olur ve gerçek hayatla ilgisi olmayan bazı görüntüler, canlılar, varlıklar  görebilir. Yalnız kaldığında ise yalnız olmadığını, kendisini birinin takip ettiği hissini duyar ve korkuya kapılır. Cinler musallat oldukları insanlara yanlış davranışlar yaptırıp başlarını belaya sokmak, diğer insanlarla ilişkilerini, işlerini, ticaretlerini bozmak vb. olumsuz bir duruma sokarak kendilerini ve çevrelerini üzmek, sıkıntıya ve zarara uğratarak hayatlarını çekilmez hale getirmek isterler.</p>
                <p>Büyü; zararlı yöntemler ile  bir insanın iradesini elinden alarak, yönetim altına alıp ona istenilenleri yaptırma işlemidir. Büyü şeytanın yardımıyla  ona  yaklaşılan iş  ve harekettir. Büyü; yapım amacına bağlı olarak ortaya  çıkan etki ve duygunun,  güçlü bir şeytani enerji ile  belirli nesneler, şifre ve formül kullanılarak  büyü yapılana transferidir. Büyünün en büyük tesiri  ruhlar üzerindedir. Fikirleri duyguları bozar, kalpleri çevirir, ahlakı perişan eder. Toplumların inanç değerlerini ifsad eder. Büyü-sihir bedenlere ve ruha tesir eden, insanı hasta eden, hatta  ölümüne sebep olabilen,  karı-koca arasını açan tertiplerdir. Büyü belirli bir amaca yönelik olarak büyücü denilen insi  şeytan tarafından yapılır.  Büyü yapılırken,  büyücü tarafından çağırılan  cinni şeytanlar (kafir cinler)  büyünün yapılma amacı olan,  büyücünün isteklerini  yerine getirirler ve büyü yapılana musallat olurlar.</p>
                <p>Cin musallatı büyü yolu ile olursa, insan eşyayı aslından farklı görebilir. Seven insanları birbirine çirkin gösterip, duygusal değişime yol açarak sevgiyi - nefrete, tersi olursa, nefreti - sevgiye çevirebilir. Asabi davranmak, küfürlü, seviyesiz ve yersiz konuşmak, kendi kendine konuşup gülmek, takıntılı olup unutmamak veya çabuk unutmak, kutsallara karşı soğuk olmak, hatta nefret etmek, çabuk öfkelenmek, çelişkili, anlamsız ve hızlı duygu değişimi, içe kapanarak insanlardan uzaklaşmak, keskin ve sert bakışlar ve ani hareketler vb davranışlar, büyü ile olan cin musallatının belirtilerindendir. </p>
                <p>Bütün bu olaylar insanın iç aleminde, ruhunda meydana gelmektedir. Organik hastalıklar gibi somut bir sebebi olmadığından hem hasta hem de çevresi, bu olumsuz değişimin sebebini kolaylıkla anlayamaz. Hasta durumunu anlamada ve anlatmakta zorlanır. İnsanları ikna edemez ve sonunda içine kapanır, yalnızlaşır veya tam tersi saldırganlaşır. Çevresine yük olmaya başlar. Bu ruh hali musallat ve etkisiyle ortaya çıkan psikolojik rahatsızlığın giderek ağırlaşmasına neden olur ve tedavisi zorlaşır. Bu olumsuz sonucun ortaya çıkışında, musallata uğrayan hastanın ve çevresinin bu konu ile ilgili doğru bilgisinin olmayışı, yada yanlış ve hurafe bilgilere inanmaları da etkilidir. Bu nedenle doğru bilgilere sahip olup, bu bilgilerle teşebbüse geçmek en önemli gerçekliktir. </p>
                <p>Peki bu sıkıntının tedavisi nedir? Bu soru ve merak ettiğiniz pek çok sorunun cevabını sitemizin ilgili başlıkları altında bulacaksınız. Hem doğru bilgiler edinecek, hem de hak ve hakikate uygun bir yöntem ile inşallah şifa bulacaksınız. Mutlaka okumalısınız!</p>
            </div>
        </div>
        <!-- Subscribe -->
        <div class="js__parallax-window" style="background: url(assets/img/cami.jpg) 50% 0 no-repeat fixed;">
            <div class="g-container--sm g-text-center--xs g-padding-y-80--xs g-padding-y-125--sm">
                <div class="g-margin-b-80--xs">
                    <p class="g-font-size-30--xs g-font-weight--700 g-color--white g-letter-spacing--2 g-margin-b-25--xs" style="font-weight: bold;-webkit-text-stroke-width: 2px;
                    -webkit-text-stroke-color: black;">İLETİŞİM</p>
                    <h5 style="font-weight: bold;-webkit-text-stroke-width: 2px;
                    -webkit-text-stroke-color: black;" class="g-font-size-22--xs g-font-size-28--md g-color--white text-left">
                    MUZAFFER HOCA <br><br>
                    Tel: (+90) 551 110 43 06<br><br>
                    WhatsApp:(+90) 551 194 44 32<br><br>
                    Didim/AYDIN
                </h5>
            </div>
        </div>
    </div>
    <!-- End Subscribe -->
