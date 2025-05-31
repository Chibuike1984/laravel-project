<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<center>
   
    <div>
    @auth
        <h2>WELCOME TO DASHBOARD</h2>
        <table border="1px" cellpadding="5px" cellspacing="5px">
            <thead>
                <tr>
                    <th>fullname</th>
                    <th>email address</th>
                    <th>password</th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <td>Okafor Chibuike Goodluck</td>
                    <td>sponkibrownO.G@gmail.com</td>
                    <td>Sponki04</td>
                </tr>

            </tbody>
        </table>
        <br>
        
        <div style="border:3px solid black;">
        <form action="/create-post" method="POST">
        @csrf
        <h3>create a  new post</h3>
        <input type="text" placeholder="post title" name="title">
        
        <textarea placeholder="body content..."  name="body"></textarea>
        <button>save post</button>
        </form>
        <br>
       </div>
        
       <br>

       <div style="border:3px solid black;">

       <h1>All post</h1>
       @foreach($posts as $post)
        <div style="background-color:grey;padding:10px;margin:10px;">      
            <h3>{{$post['title']}}   <span style="color:blue;">posted-By</span>   {{$post->user->name}}</h3>
            <p>{{$post['body']}}</p>

            <p><a href="/edit-post/{{$post->id}}">edit</a></p>

            <form action="/delete-post/{{$post->id}}" method="POST">
            @csrf
            @method('DELETE')
            <button>delete</button>
            </form>

        </div>
        @endforeach
       </div>
       
        
       <br>
        <form action="/logout" method="POST">
        @csrf
        <button>Log out</button>
        </form>

    @else
    <h1>WELCOME TO LARAVEL FRAMEWORK</h1>
    <div style="border:3px solid black;">
        <form action="/registration" method="POST">
        @csrf
        <h3>Register</h3>
        <input type="text" placeholder="fullname" name="name">
        <input type="text" placeholder="email" name="email">
        <input type="password" placeholder="password" name="password">
        <button>summit</button>
        </form>
    </div>
    <div style="border:3px solid black;">
        <form action="/login" method="POST">
        @csrf
        <h3>login</h3>
        <input type="text" placeholder="fullname" name="loginfullname">
        <input type="password" placeholder="password" name="loginpassword">
        <button>Login</button>
        </form>
    </div>


    @endauth  
    </div>
</center>    
</body>
</html>