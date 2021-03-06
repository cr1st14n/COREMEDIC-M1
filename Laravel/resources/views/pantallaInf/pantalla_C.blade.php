<!doctype html>
<html lang="en" class="no-js">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href='https://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="{{ asset('plantillaPantalla/modal/css/reset.cs')}}s"> <!-- CSS reset -->
    <link rel="stylesheet" href="{{ asset('plantillaPantalla/modal/css/style.css')}}"> <!-- Resource style -->

    <title>Clones Transition Effect | CodyHouse</title>
</head>

<body class="clones-transition">
    <main class="cd-main-content">
        <div class="center">
            <h1>Clones</h1>
            <a href="#modal-1" class="cd-btn cd-modal-trigger">Start Effect</a>
        </div>
    </main> <!-- .cd-main-content -->

    <div class="cd-modal" id="modal-1">
        <div class="modal-content">
            <h2>My Modal Content</h2>

            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad modi repellendus, optio eveniet eligendi molestiae? Fugiat, temporibus! A rerum pariatur neque laborum earum, illum voluptatibus eum voluptatem fugiat, porro animi tempora? Sit harum nulla, nesciunt molestias, iusto aliquam aperiam est qui possimus reprehenderit ipsam ea aut assumenda inventore iste! Animi quaerat facere repudiandae earum quisquam accusamus tempora, delectus nesciunt, provident quae aliquam, voluptatum beatae quis similique in maiores repellat eligendi voluptas veniam optio illum vero! Eius, dignissimos esse eligendi veniam.
            </p>

            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis saepe amet sit fugit rerum, corporis minus vitae officia quaerat incidunt voluptate, blanditiis ea est quibusdam voluptas animi quasi totam magni, commodi praesentium. Possimus quam illo ipsam iste unde totam cupiditate deleniti, impedit assumenda hic eligendi natus tempora dolores quod mollitia ab non sunt eaque adipisci, suscipit quas aliquid officiis beatae. Necessitatibus voluptatibus, perferendis tenetur perspiciatis adipisci nesciunt eum ex fuga commodi iure numquam enim rem ullam labore nisi magni sint voluptatem quos! Eum iure exercitationem voluptates repellendus culpa doloremque laborum animi illum, sint fugit soluta possimus a fuga veritatis molestias corporis placeat illo pariatur dolor reiciendis earum, sapiente omnis. Placeat maiores omnis, porro officia, laborum eos. Fugiat mollitia inventore consequuntur odit eaque, rerum recusandae, eum sint molestiae consequatur culpa deserunt quae aliquid dolor tempora tenetur architecto repellendus enim quasi atque, odio voluptas. Tenetur repellendus explicabo ipsum inventore quia aut eos expedita necessitatibus asperiores blanditiis! Delectus nisi laudantium ipsum! Quasi blanditiis corrupti dicta maiores placeat laboriosam delectus ipsum facere voluptas, magnam voluptatibus, perferendis alias ullam saepe, perspiciatis recusandae voluptates, dolores praesentium?
            </p>
        </div> <!-- .modal-content -->

        <a href="#0" id="closeModal" class="modal-close">Close</a>
    </div> <!-- .cd-modal -->

    <div class="cd-transition-layer" data-frame="25">
        <div class="bg-layer"></div>
    </div> <!-- .cd-transition-layer -->

    <script src="{{ asset('plantillaPantalla/modal/js/modernizr.js')}}"></script> <!-- Modernizr -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script>
        if (!window.jQuery) document.write('<script src="js/jquery-2.2.1-min.js"><\/script>');
    </script>
    <script src="{{ asset('plantillaPantalla/modal/js/main.js')}}"></script> <!-- Resource jQuery -->
    <script>
        setInterval(() => {
            $('.cd-modal-trigger').click();
            setTimeout(() => {
                $('#closeModal').click();
            }, 5000);
        }, 15000);
        
    </script>
</body>

</html>