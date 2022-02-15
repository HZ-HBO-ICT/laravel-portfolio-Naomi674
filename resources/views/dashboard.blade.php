@extends('layout')
    @section('content')
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
                <td>Framework Development 1</td>
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
                <td rowspan="3">Framework Project 2</td>
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
    @endsection
