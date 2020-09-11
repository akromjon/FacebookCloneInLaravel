# Facebook Clone

<h1 style="text-align: center;">Twitter Clone Documentation</h1>
<h2>Tables <small style="font-style: italic;">social/database/migrations</small></h2>
<ul>
    <li>Users
        <ul>
            <li>name</li>
            <li>username</li>
            <li>email</li>
            <li>image</li>
            <li>timeline image</li>
            <li>password</li>
            <li>profile protection</li>
        </ul>
    </li>
    <li>Profiles
        <ul>
            <li>day of birth</li>
            <li>month of birth</li>
            <li>year of birth</li>
            <li>city</li>
            <li>country</li>
            <li>information</li>
            <li>user</li>
            <li>gender</li>
        </ul>
    </li>
    <li>User Pictures
        <ul>
            <li>image</li>
            <li>user</li>
        </ul>
    </li>
</ul>
<ul>
    <li>Messages
        <ul>
            <li>User</li>
            <li>Friend</li>
            <li>Message</li>
        </ul>
    </li>
    <li>Post
        <ul>
            <li>slug</li>
            <li>content</li>
            <li>image</li>
            <li>user</li>
        </ul>
    </li>
    <li>Likes
        <ul>
            <li>post</li>
            <li>user</li>
            <li>like</li>
        </ul>
    </li>
    <li>Dislikes
        <ul>
            <li>post</li>
            <li>user</li>
            <li>dislike</li>
        </ul>
    </li>
    <li>Comments
        <ul>
            <li>post</li>
            <li>user</li>
            <li>content</li>
        </ul>
    </li>
    <li>Friend Requests
        <ul>
            <li>user</li>
            <li>friend</li>
        </ul>
    </li>
    <li>Friends
        <ul>
            <li>user</li>
            <li>friend</li>
            <li>confirm</li>
        </ul>
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

