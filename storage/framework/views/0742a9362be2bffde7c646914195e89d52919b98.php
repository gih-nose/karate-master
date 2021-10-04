<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<section id="firstView" class="h-screen w-screen">
    <div class="h-16 bg-blue-500 w-full"></div>
    <div class="modify-f-view">
        <div class="w-full h-5/6">
            <picture>
                <source media="(max-width:420px)" srcset="<?php echo e(asset('image/sm_first_view_750x850_01.jpg')); ?>">
                <img class="h-full w-full object-cover filter blur-sm" src="<?php echo e(asset('image/first_view_3000x1700_01.jpg')); ?>" >
            </picture>
        </div>
        <div class="h-1/6 flex justify-center items-center">
            <div class="w-1/2 sm:w-1/4 flex justify-center">
                <button onclick="displayOrderModal()" class="block rounded-full shadow-xl py-3 px-2 sm:py-4 sm:px-6 hover:bg-blue-50 bg-blue-100 text-xs sm:text-base">商品注文へすすむ</button>
            </div>
        </div>
    </div>
    <div class="absolute  text-gray-700 flex justify-around items-center rounded-xl bg-white bg-opacity-30 top-0 w-full h-full">
        <p class="text-8xl">準備中</p>
        <p class="leading-relaxed">
            <br>2021年10月4日より販売開始を予定しておりました
            <br>支部長・道場長向けの商品は、現在パッケージに含める
            <br>写真の選定作業に難航しております。
            <br>お楽しみにお待ちいただいたお客様には
            <br>大変ご迷惑をおかけしますが
            <br>ベストショットを皆様にお届けするために
            <br>今しばらくお時間をいただきます。
                よろしくお願い致します。
        </p>
    </div>    
</section>
<section id="description" class="flex justify-center items-center h-screen w-screen bg-blue-50">
    <div class="container text-center">
        <h1 class="sm:mb-12 mb-10 sm:text-4xl text-base">商品説明</h1>
        <p class="mb-16 hidden sm:block  leading-relaxed  text-base  ">
            第7回オープントーナメント全北陸空手道選手権大会の模様を
           <br>プロカメラマンが撮影、ベストショットをピックアップした
           <br>写真の画像データをUSBメモリを媒体に
           <br>￥20,000 / 1支部・道場で販売いたします。
           <br>商品は販売期間終了後,1〜2週間以内に発送いたします。
        </p>
        <p class="mb-16 sm:hidden leading-relaxed text-xs  ">
            第7回オープントーナメント全北陸
            <br>空手道選手権大会の模様を
            <br>プロカメラマンが撮影、ベストショットをピックアップした
            <br>写真の画像データをUSBメモリを媒体に
            <br>￥20,000 / 1支部・道場で販売いたします。
            <br>
            <br>商品は販売期間終了後
            <br>1〜2週間以内に発送いたします。

        </p>
        <img src="<?php echo e(asset('image/usb_memory.png')); ?>" class="transform sm:scale-100 scale-90 block mx-auto h-32 w-32 " alt="" srcset="">
    </div>
</section>

<section id="detail" class="flex justify-center items-center h-screen w-screen bg-gray-50">
    <div class="container text-center">
        <h1 class="sm:mb-12 mb-10 sm:text-4xl text-base">商品詳細</h1>
        <p class="font-serif mb-6 sm:mb-10 text-xl text-blue-300">
            Coming Soon ...
        </p>
    </div>
</section>

<section id="howToBuy" class="flex justify-center items-center h-screen w-screen bg-gray-50">
    <div class="container text-center">
        <h1 class="sm:mb-12 mb-10 sm:text-4xl text-base">購入方法</h1>
        <p class="mb-5 sm:leading-loose leading-relaxed sm:text-base text-xs >
            <a onclick="displayAccoutModal(event)">アカウント登録</a>アカウント登録後に以下のボタンか
           <br>もしくは、画面最上部のバーの注文ボタンから注文を押す
        </p>
        <button onclick="displayOrderModal()" class="block mx-auto sm:px-8 sm:py-4 px-6 py-2 sm:mb-10 mb-6 rounded-full bg-blue-100 hover:bg-blue-50">注文へすすむ</button>
        <svg xmlns="http://www.w3.org/2000/svg" class="block mx-auto h-20 w-20 text-gray-300 sm:mb-10 mb-6" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v3.586L7.707 9.293a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 10.586V7z" clip-rule="evenodd" />
        </svg>
        <p class="sm:mb-10 mb-6 sm:leading-loose leading-relaxed sm:text-base text-xs ">
            注文画面で購入したい画像がある支部・道場の選択と
           <br>必要事項を入力をおこない、注文ボタンを押す
        </p>
        <svg xmlns="http://www.w3.org/2000/svg" class="block mx-auto h-20 w-20 text-gray-300 sm:mb-10 mb-6" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v3.586L7.707 9.293a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 10.586V7z" clip-rule="evenodd" />
        </svg>
        <p class="mb-5 sm:leading-loose leading-relaxed sm:text-base text-xs ">
            注文ボタンを押すとGMO決済サービスに移動するので
           <br>決済を完了する
        </p>
    </div>
</section>
<div onclick="clickAway(event)" id="orderModal" class="transition-all duration-200 ease-in-out transform scale-0 fixed top-0 justify-center items-center h-screen w-screen bg-gray-700 bg-opacity-70">
    <div class="sm:h-5/6 h-4/5 w-full">
        <div class="flex justify-center items-center w-full h-full box-border py-5 px-5">
            <div class="main-modal sm:w-1/3 w-full bg-blue-50 rounded-lg shadow-2xl h-full box-border p-8  overflow-y-auto">
                <h1 class="block w-full text-center text-gray-600 sm:text-2xl text-lg mb-10">注文確認</h1>
                <form class="h-adr" action="/" method="post">
                    <input type="hidden" class="p-country-name" value="Japan">
                    <div class="flex flex-col mb-4 w-1/2">
                        <label class="mb-2 font-bold sm:text-base text-sm text-gray-600" for="name">名前</label>
                        <input class="py-2 px-3 text-grey-800 border-blue-200 rounded-md" type="text" name="name" id="name">
                    </div>
                    <div class="border border-dashed border-gray-400 mb-3 box-border px-3"></div>
                    <div class="flex flex-col mb-4 w-1/3">
                        <label class="mb-2 font-bold sm:text-base text-sm text-gray-600" for="name">郵便番号</label>
                        <input class="border-blue-200 rounded-md" type="text" class="p-postal-code" size="8" maxlength="8">
                    </div>
                    <div class="flex space-x-2">
                        <div class="flex flex-col mb-4 w-2/5">
                            <label class="mb-2 font-bold sm:text-base text-sm text-gray-600" for="address">都道府県名</label>
                            <input class="p-region py-2 px-3 text-grey-800 border-blue-200 rounded-md" type="text" name="address" id="address">
                        </div>
                        <div class="flex flex-col mb-4 w-2/5">
                            <label class="mb-2 font-bold sm:text-base text-sm text-gray-600" for="address">市町村区</label>
                            <input class="p-locality py-2 px-3 text-grey-800 border-blue-200 rounded-md" type="text" name="address" id="address">
                        </div>                    
                    </div>
                    <div class="flex flex-col mb-4">
                        <label class="mb-2 font-bold sm:text-base text-sm text-gray-600" for="address">丁目番地号</label>
                        <input class="p-street-address py-2 px-3 text-grey-800 border-blue-200 rounded-md" type="text" name="address" id="address">
                    </div>
                    <div class="flex flex-col mb-4">
                        <label class="mb-2 font-bold sm:text-base text-sm text-gray-600" for="address">マンション名・部屋番号など</label>
                        <input class="p-extended-address py-2 px-3 text-grey-800 border-blue-200 rounded-md" type="text" name="address" id="address">
                    </div>
                    <div class="border border-dashed border-gray-400 mb-3 box-border px-3"></div>
                    <div class="flex flex-col mb-4">
                        <label class="mb-2 font-bold sm:text-base text-sm text-gray-600" for="email">メールアドレス</label>
                        <input class="py-2 px-3 text-grey-800 border-blue-200 rounded-md" type="email" name="email" id="email">
                    </div>
                    <div class="flex flex-col mb-4">
                        <label class="mb-2 font-bold sm:text-base text-sm text-gray-600" for="branch">支部・道場名</label>
                        <select class="py-2 px-3 text-grey-800 border-blue-200 rounded-md">
                            <option>Surabaya</option>
                            <option>Jakarta</option>
                            <option>Bandung</option>
                            <option>Mojokerto</option>
                        </select>
                    </div>
                    <button class="block bg-blue-200 hover:bg-blue-100  uppercase text-lg mx-auto py-1 px-5 rounded-full" type="submit">決済へ</button>
                </form>
            </div>
        </div>
    </div>
    <div class="sm:h-1/6 h-1/5 w-full flex justify-center items-center">
        <button onclick="deleteModal()" class="border block w-48 h-10 rounded-full border-blue-50 text-blue-50">
            <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
    </div>
</div>
<footer class="bg-gray-700 text-center">
    <div class="container mx-auto flex flex-wrap justify-around py-10 text-blue-50 sm:text-base text-xs">
        <a href="https://vb2.gih-creator.com/karate_demo" class="block border-b">新極真写真館</a>
        <a href="" class="block border-b">利用規約</a>
        <a href="" class="block border-b">プライバシーポリシー</a>
        <a href="" class="block border-b">お問い合わせ</a>
    </div>
</footer>
    
 <?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>

<style>

.modify-f-view{
    height: calc(100% - 64px);
}

</style>

<script>
    function displayAccoutModal(e){
        e.preventDefault();
        document.getElementById('orderModal').classList.remove('scale-0');
        document.getElementById('orderModal').classList.add('scale-100');
    }

    function displayOrderModal(){
        document.getElementById('orderModal').classList.remove('scale-0');
        document.getElementById('orderModal').classList.add('scale-100');
    }

    function clickAway(e){
        if(e.target.closest('.main-modal') ?? false){
            return false;
        }else{
            document.getElementById('orderModal').classList.remove('scale-100');
            document.getElementById('orderModal').classList.add('scale-0');
        }
    }
</script><?php /**PATH /home/webmaseter/public_html/karate-master/resources/views/top.blade.php ENDPATH**/ ?>