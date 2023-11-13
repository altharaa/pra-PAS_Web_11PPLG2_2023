@extends('layouts.main')

@section('container')
    <h1 style="text-align: center;">Category</h1>
    <table style="width: 80%; margin: auto; border-collapse: collapse; border-spacing: 0; font-size: 18px; text-align: left;">
        <thead>
            <tr style="background-color: #f2f2f2; border-top: 1px solid #dddddd; border-bottom: 1px solid #dddddd;">
                <th scope="col" style="padding: 15px; border: 1px solid #dddddd;">No</th>
                <th scope="col" style="padding: 15px; border: 1px solid #dddddd;">Category</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)
                <tr style="border-top: 1px solid #dddddd; border-bottom: 1px solid #dddddd;">
                    <th scope="row" style="padding: 15px; border: 1px solid #dddddd;">{{$loop->iteration}}</th>
                    <td style="padding: 15px; border: 1px solid #dddddd;">{{$category["name"]}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
