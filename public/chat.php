<!DOCTYPE html>
<html lang="en">

<?php include_once '../_partials/_head.php' ?>

<body class="h-screen flex flex-col justify-between pt-30 pb-40 xl:pb-0 selection:bg-fuchsia-300 selection:text-fuchsia-900">

    <header class="bg-[#D7D0C8] fixed top-0 left-0 right-0 flex flex-row items-center gap-3 py-2 pt-4 px-4 ">


        <img src="../images/Logo-header.png" alt="logo du header" class="h-24">
        <div class="flex flex-col justify-end">
            <h3 class="barriecito-regular text-4xl">Mini Chat</h3>
            <p class="bellota-regular">Discutez avec tout le monde...</p>
        </div>


    </header>

    <!-- div de participants et le main -->
    <div class="flex flex-row h-full">


<!-- main avec le footer -->
        <main class="h-full flex flex-col bellota-bold ">


            <div class="h-full flex flex-row bellota-bold bg-[#F1F5F2] ">


                <section class="hidden xl:flex flex-col xl:py-8 px-8 gap-4">
                    <h1 class="xl:text-4xl">Discutez en temps réel avec votre communauté</h1>
                    <img src="../images/Le-gros-chat.png"
                        alt="image d'accueil un gros chat avec une fillette" class="w-lg">
                </section>



                <!-- CHAT -->
                <div class="flex flex-col-reverse gap-4 py-4 px-4 h-full overflow-y-auto xl:pb-48">




                    <!-- EXEMPLE MESSAGE 1 -->
                    <div class="flex flex-row gap-8 items-center ">
                        <div class="flex flex-col"><img src="../images/Chatter4.png" alt="" class="w-16">
                            <p>PandaCraft</p>
                        </div>
                        <div class="relative bg-[#dbdbdb] rounded-2xl pt-4 px-4 pb-6">
                            <p> Hello World !Hello World !Hello World !Hello World !Hello World !Hello World !Hello World !Hello World !Hello World !Hello World !Hello World !Hello World !Hello World !Hello World !Hello World !</p>

                            <p class="absolute bottom-1 right-4 text-xs font-bold font-mono">20/05/2026 12:34</p>

                        </div>
                    </div>

                    <!-- EXEMPLE MESSAGE 2 -->
                    <div class="flex flex-row gap-8 items-center ">
                        <div class="flex flex-col"><img src="../images/message-Ayumu.png" alt="" class="w-16">
                            <p>Ayumu</p>
                        </div>
                        <div class="relative bg-[#dbdbdb]  rounded-2xl pt-4 px-4 pb-6">
                            <p> Alors, c'est quand qu'on fait l'apéro pour le club ?</p>

                            <p class="absolute bottom-1 right-4 text-xs font-bold font-mono">19/05/2026 12:56</p>

                        </div>
                    </div>





                    <!-- EXEMPLE MESSAGE 1 -->
                    <div class="flex flex-row gap-8 items-center ">
                        <div class="flex flex-col"><img src="../images/Chatter4.png" alt="" class="w-16">
                            <p>PandaCraft</p>
                        </div>
                        <div class="relative bg-[#dbdbdb] rounded-2xl pt-4 px-4 pb-6">
                            <p> Hello World !Hello World !Hello World !Hello World !Hello World !Hello World !Hello World !Hello World !Hello World !Hello World !Hello World !Hello World !Hello World !Hello World !Hello World !</p>

                            <p class="absolute bottom-1 right-4 text-xs font-bold font-mono">20/05/2026 12:34</p>

                        </div>
                    </div>

                    <!-- EXEMPLE MESSAGE 1 -->
                    <div class="flex flex-row gap-8 items-center ">
                        <div class="flex flex-col"><img src="../images/Chatter4.png" alt="" class="w-16">
                            <p>PandaCraft</p>
                        </div>
                        <div class="relative bg-[#dbdbdb] rounded-2xl pt-4 px-4 pb-6">
                            <p> Hello World !Hello World !Hello World !Hello World !Hello World !Hello World !Hello World !Hello World !Hello World !Hello World !Hello World !Hello World !Hello World !Hello World !Hello World !</p>

                            <p class="absolute bottom-1 right-4 text-xs font-bold font-mono">20/05/2026 12:34</p>

                        </div>
                    </div>

 <!-- EXEMPLE MESSAGE 1 -->
                    <div class="flex flex-row gap-8 items-center ">
                        <div class="flex flex-col"><img src="../images/Chatter4.png" alt="" class="w-16">
                            <p>PandaCraft</p>
                        </div>
                        <div class="relative bg-[#dbdbdb] rounded-2xl pt-4 px-4 pb-6">
                            <p> Hello World !Hello World !Hello World !Hello World !Hello World !Hello World !Hello World !Hello World !Hello World !Hello World !Hello World !Hello World !Hello World !Hello World !Hello World !</p>

                            <p class="absolute bottom-1 right-4 text-xs font-bold font-mono">20/05/2026 12:34</p>

                        </div>
                    </div>

                    <!-- EXEMPLE MESSAGE 2 -->
                    <div class="flex flex-row gap-8 items-center ">
                        <div class="flex flex-col"><img src="../images/message-Ayumu.png" alt="" class="w-16">
                            <p>Ayumu</p>
                        </div>
                        <div class="relative bg-[#dbdbdb]  rounded-2xl pt-4 px-4 pb-6">
                            <p> Alors, c'est quand qu'on fait l'apéro pour le club ?</p>

                            <p class="absolute bottom-1 right-4 text-xs font-bold font-mono">19/05/2026 12:56</p>

                        </div>
                    </div>




                </div>



                <!-- ////////////////////Desktop/////////////////Fond message//////////////////////////////////// -->
                <div class="hidden xl:flex bg-[#467599] fixed bottom-0 left-0 right-62 items-center justify-center flex-col px-8 py-4">


                  <form action="" method="POST" class="bg-[#D7D0C8] rounded-2xl  w-full py-4 pl-4 flex">
            <textarea name="message" id="message" maxlength="500" rows="4" class="resize-none w-full focus-visible:border-sky-500" placeholder="Entrez votre message..."></textarea>
            <button type="submit">
                <img src="../images/fleche.png" alt="" class="w-16 ">
            </button>
        </form>



                    <div class="hidden xl:flex flex-row text-white w-full justify-between ">
                        <p>Entrez votre pseudo pour commencer</p>
                        <p>0/500 caractères</p>
                    </div>



                </div>

                <!-- ///////////////////////////////////////////////////////// -->
         


        </div>
   </main>

        <!-- /////////////////PARTICIPANTS////////BANDEAU/////////////A droite////////////////////// -->
        <section class="hidden xl:flex bg-[#6F5060] h-full w-80 flex-col items-center gap-8 py-8 px-8">
            <div class="h-full">
                <h3 class="barriecito-regular text-4xl">Participants</h3>
                <p>4 Utilisateurs actifs</p>
            </div>
            <div class="flex flex-col items-center bellota-regular gap-2"><img src="../images/message-Ayumu.png" alt="" class="w-24">
                <p>Ayumu</p>
            </div>

            <div class="flex flex-col items-center bellota-regular gap-2"><img src="../images/message-Blur.png" alt="" class="w-24">
                <p>Blur</p>
            </div>

            <div class="flex flex-col items-center bellota-regular gap-2"><img src="../images/Chatter4.png" alt="" class="w-24">
                <p>PandaCraft</p>
            </div>

        </section>


    </div>


    <!-- ///////////////////////////////MOBILE////////////////////////////////////// -->
    <footer class="bg-[#467599] fixed bottom-0 left-0 right-0  px-4 py-4 xl:hidden">

        <form action="" method="POST" class="bg-[#D7D0C8] rounded-2xl w-full py-4 pl-4 flex">
            <textarea name="message" id="message" maxlength="500" rows="4" class="resize-none w-full focus-visible:border-sky-500" placeholder="Entrez votre message..."></textarea>
            <button type="submit">
                <img src="../images/fleche.png" alt="" class="w-16  xl:hidden">
            </button>
        </form>

        <!-- <a href="" class="bg-[#D7D0C8] rounded-2xl py-8 px-8 relative  h-40 w-104">
            Entrez votre message...</a>
        <a href=""></a> -->



    </footer>

</body>

</html>