<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">



        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>

    </head>
    <body class="">

        <form id="form">
            <input type="text" name="text">
        </form>

        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <script type="module">

            const form = document.getElementById('form')

            form.addEventListener('submit', async (e)=>{
                e.preventDefault()

                await axios.get(`api/post/${e.target[0].value}`,)
                    .then(res=>console.log(res))
                    .catch(err=>console.log(err))
            })
/*
            Echo.private('private-channel.1')
                .subscribed(()=>{
                console.log('Subscribed')
            }).listen('.my-event', (e) => {
                    console.log(e);
            })*/


        </script>
    </body>
</html>
