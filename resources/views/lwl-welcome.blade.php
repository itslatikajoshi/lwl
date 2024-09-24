<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Learning with Latika</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- style sheet add -->
         <link rel="stylesheet" href="{{asset('css/app.css?ver='). time()}}">

    </head>

    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="lwl-text-center">Sign Up</h2>
                     <!-- Form for sign up  -->
                    <form action="" class="lwl-signup">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password">
                        <button type="submit" class="lwl-button">Submit</button>
                        <button type="reset" class="lwl-button">Cancel</button>

                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
