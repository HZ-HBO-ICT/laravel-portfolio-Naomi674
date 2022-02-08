<!DOCTYPE html>
<html lang=en">
<header>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/style.css">
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
        <li><a href="/">Home</a></li>
        <li><a href="profile">Profile</a></li>
        <li><a class="active" href="dashboard">Dashboard</a></li>
        <li><a href="faq">FAQ</a></li>
        <li><a href="blog">Blog</a></li>
    </ul>
</nav>
<div class="container">
    <div class="header">Header</div>
    <div class="container-browser">
        <table>
            <thread>
                <tr>
                    <th>Quartile</th>
                    <th>Course</th>
                    <th>EC</th>
                    <th>Exam</th>
                    <th>Grade</th>
                </tr>
            </thread>
            <tbody>
            <tr>
                <td rowspan="3">1</td>
                <td>Program and Career Orientation</td>
                <td>2,5</td>
                <td>Assessment</td>
                <td></td>
            </tr>
            <tr>
                <td>Computer Science Basics</td>
                <td>5</td>
                <td>Written Exam</td>
                <td></td>
            </tr>
            <tr>
                <td>Programming Basics</td>
                <td>5</td>
                <td>Case Study</td>
                <td></td>
            </tr>
            <tr>
                <td rowspan="2">2</td>
                <td rowspan="2">Object Oriented Programming</td>
                <td rowspan="2">10</td>
                <td>Case Study</td>
                <td></td>
            </tr>
            <tr>

                <td>Project</td>
                <td></td>
            </tr>
            <tr>
                <td rowspan="4">3</td>
                <td>Framework Developement 1</td>
                <td>5</td>
                <td>Case Study</td>
                <td></td>
            </tr>
            <tr>
                <td rowspan="3">Framework Project 1</td>
                <td rowspan="3">7,5</td>
                <td>Project</td>
                <td></td>
            </tr>
            <tr>

                <td>Assessment</td>
                <td></td>
            </tr>
            <tr>

                <td>Report</td>
                <td></td>
            </tr>
            <tr>
                <td rowspan="3">4</td>
                <td rowspan="3">Framwork Project 2</td>
                <td rowspan="3">10</td>
                <td>Portfolio</td>
                <td></td>
            </tr>
            <tr>
                <td>Project</td>
                <td></td>
            </tr>
            <tr>
                <td>Assessment</td>
                <td></td>
            </tr>
            <tr>
                <td>The Entire Year</td>
                <td>Personal Professional Development</td>
                <td>12,5</td>
                <td>Portfolio</td>
                <td></td>
            </tr>
            <tr>
                <td>Whenever</td>
                <td>Personality 1</td>
                <td>2,5</td>
                <td>report</td>
                <td></td>
            </tr>
            </tbody>
        </table>
        <label id="bar" for="credits">Number of Credits Obtained:</label>
        <progress id="credits" value="0" max="60"></progress>
        <label id="bar" for="credits">NBSA:</label>
        <progress id="credits" value="45" max="60"></progress>
    </div>
    <div class="content-small">

    </div>
    <div class="content-small"></div>
    <div class="footer">
    </div>
</div>

</body>
