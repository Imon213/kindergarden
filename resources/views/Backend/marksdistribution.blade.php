@extends('Backend.admin')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
    <style>
    form {
        display: flex;
        flex-direction: column;
        gap: 2rem;
        padding:1rem;
    }
    .container{
        border:1px solid lightgray;
        padding:0!important;
        
    }
    .b-title{
        padding: 5px;
        color:white;
    }
    .marks{
        border:1px solid lightgray;
    }
    .m-title{
        padding: 5px;
        color:white;
        margin-bottom:1rem;
    }
    </style>
    
</head>

<body>
    <div class="container">
       <div class="b-title bg-secondary">Marking Distribution</div>
     <form action="{{route('marksdisttibution')}}" method="post">
        @csrf
     <div class="basic-content">
            <div class="row">
                <div class="col-md-3">
                    <label for="session">Select Session</label>
                    <select name="session" id="session" class="form-select" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option value="one">2022</option>
                        <option value="two">2022-2023</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label for="subject">Select Subject</label>
                    <select name="subject" id="subject" class="form-select" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option value="Bangla">Bangla</option>
                        <option value="English">English</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label for="class_name">Select Class</label>
                    <select name="class_name" id="class_name" class="form-select" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option value="one">One</option>
                        <option value="two">Two</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label for="exam">Select Exam Type</label>
                    <select name="exam" id="exam" class="form-select" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option value="mid">Mid Term</option>
                        <option value="final">Final Term</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="marks" id="marks">
            <div class="m-title bg-info">Possible Marks</div>
            <ul id="item">
                <li>
                    <div class="row">
                        <div class="col-md-5">
                            <input type="text" name="title[]" class="form-control" placeholder="Enter title of marks">
                        </div>
                        <div class="col-md-3">
                            <input type="text" name="con[]" class="form-control" placeholder="Enter marks contribution">
                        </div>
                        <div class="col-md-3">
                            <input type="text" name="marks[]" class="form-control" placeholder="Enter marks">
                        </div>
                        <div class="col-md-1">
                            <button style="border-radius: 100%;" id="add-more" name="" class="btn btn-primary"><i class="fa-solid fa-plus"></i></button>
                        </div>
                    </div>
                    <br>
            </ul>
            </li>
        </div>
        <input style="width:20%; margin: 0 auto;" type="submit" value="SUBMIT" class="btn btn-success"/>
     </form>
    </div>
    <script type="text/javascript">
    document.getElementById('add-more').addEventListener('click', function(event) {
        event.preventDefault();
        const parentItem = document.getElementById('item');
        const newItem = document.createElement('li');
        newItem.innerHTML = `<div class="row">
                <div class="col-md-5">
                    <input name="title[]" type="text" class="form-control" placeholder="Enter title of marks">
                </div>
                <div class="col-md-3">
                    <input name="con[]" type="text" class="form-control" placeholder="Enter marks contribution">
                </div>
                <div class="col-md-3">
                    <input name="marks[]" type="text" class="form-control" placeholder="Enter marks">
                </div>
                
            </div>
            <br>
           `;
        parentItem.appendChild(newItem);


    });
    </script>
</body>

</html>
@endsection