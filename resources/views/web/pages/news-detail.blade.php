@extends('web/components/layout.index')
@section('meta-tag')
<title></title>
<meta name="description" content="meta description">
@endsection
@section('header')
@include('web/components/presentational.header')
@endsection
@section('main')
<main>
    <section class="h-[400px]">
        <img class="w-full h-full object-cover" src={{asset('images/Eastern-Shenzhen-Promo.png')}} />
    </section>
    <section class="px-8 lg:px-[6.5rem] py-[4rem]">
        <h1 class="text-[45px] text-center font-intBold mb-8">Article Title</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi ipsa odio autem rerum eaque fugiat, dolor unde aperiam ipsam error natus veritatis aliquid amet! Voluptatum nisi soluta quas necessitatibus obcaecati ullam earum similique adipisci, et maiores voluptatibus assumenda quibusdam sed consequuntur veniam, in animi! Ipsa quas ratione, sequi ab, ex quia fugit blanditiis ipsum, animi nostrum nulla odit numquam? Dolorem repudiandae magnam neque ut, voluptas nesciunt, eligendi officia architecto doloribus reprehenderit porro culpa eveniet velit soluta quas quaerat voluptatem quis officiis. In soluta natus quam nesciunt. Quibusdam quasi atque rerum repudiandae sunt. Beatae mollitia nemo dicta dolorum tempore quos animi, numquam reiciendis alias ipsum exercitationem unde maiores nulla ad provident. Molestias aliquam accusamus quia debitis adipisci laboriosam ipsum id similique corporis perspiciatis veritatis nam, dolores cupiditate, hic atque tenetur repellat iste animi delectus, facere doloremque! Sit soluta saepe, culpa fugit autem modi vero, magni ipsa beatae veritatis quasi dolorum? Aspernatur quod rerum enim, laborum beatae possimus veritatis rem unde omnis. Accusamus consectetur aspernatur impedit. Sed temporibus unde nemo, repudiandae at sunt, sequi ipsam pariatur quasi reiciendis dolor iusto. Atque modi earum amet ea explicabo a. Laborum itaque quis quas corporis saepe, molestiae dolor doloribus fuga harum assumenda placeat, velit fugiat!</p>
    </section>
</main>
@endsection
