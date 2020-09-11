# Facebook Clone

<h1 style="text-align: center;">Twitter Clone Documentation</h1>
<h2>Tables <small style="font-style: italic;">social/database/migrations</small></h2>
<ul>
    <li>Users
        <ol>
            <li>name</li>
            <li>username</li>
            <li>email</li>
            <li>image</li>
            <li>timeline image</li>
            <li>password</li>
            <li>profile protection</li>
        </ol>
    </li>
    <li>Profiles
        <ol>
            <li>day of birth</li>
            <li>month of birth</li>
            <li>year of birth</li>
            <li>city</li>
            <li>country</li>
            <li>information</li>
            <li>user</li>
            <li>gender</li>
        </ol>
    </li>
    <li>User Pictures
        <ol>
            <li>image</li>
            <li>user</li>            
        </ol>
    </li>
    
    <li>Messages
        <ol>
            <li>User</li>
            <li>Friend</li> 
            <li>Message</li>                      
        </ol>
    </li>
    <li>Post
        <ol>
            <li>slug</li>
            <li>content</li> 
            <li>image</li>  
            <li>user</li>                      
        </ol>
    </li>
    <li>Likes
        <ol>
            <li>post</li>  
            <li>user</li>  
            <li>like</li> 
        </ol>
    </li>
    <li>Dislikes
        <ol>
            <li>post</li>  
            <li>user</li>  
            <li>dislike</li> 
        </ol>
    </li>
    <li>Comments
        <ol>
            <li>post</li>  
            <li>user</li>  
            <li>content</li> 
        </ol>
    </li>
    <li>Friend Requests
        <ol>
            <li>user</li>  
            <li>friend</li>             
        </ol>
    </li>
    <li>Friends
        <ol>
            <li>user</li>  
            <li>friend</li> 
            <li>confirm</li>            
        </ol>
    </li>    
</ul>
<h2>Models <small style="font-style: italic;">social/app/Models</small></h2>
<ul>
    <li>comment/Comment.php
        <ul> 
            <li>uses Comments Table</li>
            <li>Comment belongs to Post Model</li>
            <li>Comment belongs to User Model</li>
        </ul>
    </li>
</ul>

