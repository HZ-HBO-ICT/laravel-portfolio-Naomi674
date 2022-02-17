<!DOCTYPE html>
<html lang="en">
<header>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="/css/app.css">

</header>
<body>
<nav>
    <p>Naomi Norris</p>
    <ul>
        <li><a href="#">Links</a>
            <ul>
                <li><a href="links/cer.pdf" target="_blank">CER</a></li>
                <li><a href="links/implementation-regulations.pdf" target="_blank">IR</a></li>
                <li><a href="https://glaze-donut-5a5.notion.site/Assignment-Specification-661c5ac5d7494328a58be61d00dd41e4" target="_blank">Assignment Specification</a></li>
                <li><a href="https://teams.microsoft.com/l/team/19%3a2e2afa0286b04932be16cb8ad2d9d2c0%40thread.skype/conversations?groupId=95bddebc-a340-4d88-81fc-b80e0bfc70c3&tenantId=4c16deb3-342d-4fca-bcd5-b1429308034c" target="_blank">Teams Environment</a></li>
                <li><a href="https://apps.hz.nl/angular/studievoortgang/" target="_blank">Study Progress</a></li>
                <li><a href="https://github.com/HZ-HBO-ICT" target="_blank">Github Environment</a></li>
            </ul>
        </li>
        <li><a class="{{ Request::path() === '/' ? 'active' : '' }}" href="/">Home</a></li>
        <li><a class="{{ Request::path() === 'profile' ? 'active' : '' }}" href="profile">Profile</a></li>
        <li><a class="{{ Request::path() === 'dashboard' ? 'active' : '' }}" href="dashboard">Dashboard</a></li>
        <li><a class="{{ Request::path() === 'faq' ? 'active' : '' }}" href="faq">FAQ</a></li>
        <li><a class="{{ Request::path() === 'blog' ? 'active' : '' }}" href="blog">Blog</a></li>
    </ul>
</nav>
<div class="container">
    @yield('content')
</div>
</body>
</html>
