@extends('layouts.adminapp')

@section('content')

<div class="highlight-phone">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="intro">
                    <h2>SLTUTOR</h2>
                    <p><br>Students are unique. They may go to the same school and be in the same grade as other students, but they do not think or learn alike. Be willing to change the way you teach sometimes so the student can learn in the best way
                        for him<br><br></p><a class="btn btn-primary" role="button" href="#">Join with us</a></div>
            </div>
            <div class="col-sm-4">
                <div class="d-none d-md-block iphone-mockup"><img class="d-xl-flex device" src="/storage/assets/img/undraw_teaching_f1cm.svg"></div>
            </div>
        </div>
    </div>
</div>

<br>
<!--For display error message or success messages-->
<div class="container">

@include('inc.messages');

</div>


<div class="container profile profile-view" id="profile">
    <div class="row">
        <div class="col-md-12 alert-col relative">
            <div class="alert alert-info absolue center" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><span>Profile save with success</span></div>
        </div>
    </div>

    <!--**************************************************************************************
                                 Form
        ***********************************************************************************-->
    
  

    {!! Form::open(['action' => ['PastPapersController@update',$papers->id], 'method' => 'POST','enctype' => 'multipart/form-data']) !!}

        <div class="form-row profile-row">
            <div class="col-md-4 relative">

                <div class="avatar">
                    <div class="center"><img width="300px" src="/storage/assets/img/wait.png" /></div>
                </div>
                
            </div>
            <div class="col-md-8">
                <h1>Edit Advertisement</h1>
                <hr>
                <div class="form-row">
                    <div class="col-sm-12 col-md-6">

                        <div class="form-group">
                            
                            <strong> 
                                {{ Form::label('year','Year') }}
                            </strong>
                            {{ Form::text('year',$papers->year,['class' => 'form-control']) }}
                            
                        </div>

                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                            
                            <strong> 
                                {{ Form::label('school','School') }}
                            </strong>
                            {{ Form::text('school',$papers->school,['class' => 'form-control']) }}
                        
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                            
                            <strong>
                                {{ Form::label('link','link') }}
                            </strong>
                            {{ Form::text('link',$papers->link,['class' => 'form-control']) }}
                        
                        
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                            
                            <strong> 
                                {{ Form::label('grade','Grade') }}
                            </strong>   
        
                            {{ Form::select('grade', [
        
                                'Grade 12' => 'Grade 12', 
                                'Grade 13' => 'Grade 13',  
           
                                ], $papers->grade,['class' => 'form-control' , 'placeholder' => 'Pick a grade...']) }}
                        
                        </div>
                    </div>
                </div>

                <div class="form-group">
                            
                    <strong> 
                        {{ Form::label('term','Term') }}
                    </strong>   

                    {{ Form::select('term', [

                        '1st Term' => '1st Term', 
                        '2nd Term' => '2nd Term',  
                        '3rd Term' => '3rd Term',  

                        ], $papers->term ,['class' => 'form-control' , 'placeholder' => 'Pick a term...']) }}
                
                </div>

                <div class="form-group">
                            
                    <strong> 
                        {{ Form::label('level','Level') }}
                    </strong>   

                    {{ Form::select('level', [

                        'Advanced Level' => 'Advanced Level', 
                        'Ordinary Level' => 'Ordinary Level',   

                        ], $papers->level ,['class' => 'form-control' , 'placeholder' => 'Pick a Level...']) }}
                
                </div>
                
            
                <div class="form-group">
                                    

                    <strong> 
                        {{ Form::label('subject','Subject') }}
                    </strong>   

                    {{ Form::select('subject', [

                        'Maths' => 'Maths', 
                        'Science' => 'Science', 
                        'History' => 'History', 
                        'Sinhala' => 'Sinhala', 
                        'English' => 'English', 
                        'Buddhism' => 'Buddhism', 
                        'Information & Communication Technology' => 'Information & Communication Technology', 
                        'Geography' => 'Geography',
                        'Music' => 'Music', 
                        'Art' => 'Art', 
                        'Dancing' => 'Dancing', 
                        'Health & Physical Education' => 'Health & Physical Education',
                            'Combined Maths' => 'Combined Maths', 
                            'Biology' => 'Biology', 
                            'Physics' => 'Physics', 
                            'Chemistry' => 'Chemistry',
                            'Agriculture' => 'Agriculture', 
                            'A/L ICT' => 'A/L ICT', 
                            'Business Studies' => 'Business Studies', 
                            'Economics' => 'Economics', 
                            'Accounting' => 'Accounting', 
                            'A/L Sinhala' => 'A/L Sinhala', 
                            'Political Science' => 'Political Science',
                            'Buddist Civilization' => 'Buddist Civilization', 
                            'A/L Geography' => 'A/L Geography', 
                            'Engineering Technology' => 'Engineering Technology',
                            'Bio Systems Technology' => 'Bio Systems Technology', 
                            'Science for Technology' => 'Science for Technology', 
                            'General English' => 'General English',
                            'Logic' => 'Logic',
                            
                            ], $papers->subject,['class' => 'form-control' , 'placeholder' => 'Pick a subject...']) }}
                        
                </div>
                
         


            <div class="form-group">
            
                            
                    <strong> 
                        {{ Form::label('medium','Medium') }}
                    </strong>   

                    {{ Form::select('medium', [

                        'Sinhala Medium' => 'Sinhala Medium', 
                        'English Medium' => 'English Medium',  
                        'Tamil Medium' => 'Tamil Medium',  
                        
                        ], $papers->medium,['class' => 'form-control' , 'placeholder' => 'Pick a Medium...']) }}
           
            
            </div>


        <div class="form-group">
            
            <strong> 
                {{ Form::label('cover_image','Cover Image') }}
            </strong> 
            {{ Form::file('cover_image') }} 
        
        </div>

        {{Form::hidden('_method', 'PUT')}}

        <div class="form-row">

            <div class="col-md-12 content-right">
                
                {{Form::submit('Edit',['class' => 'btn btn-primary form-btn'] )}}

                <button class="btn btn-danger form-btn" type="reset">CANCEL </button>
            
            </div>

        </div>
</div>
</div>

{!! Form::close() !!}



 <!--**************************************************************************************
                                End of Form
    ***********************************************************************************-->
</div>

<script>
//java scipt for show and hide alsubject list and olsubject list
function checkfunc(x)
{
    if( x == 0)
    {
        document.getElementById("alsubblock").style.display = 'block';
        document.getElementById("olsubblock").style.display = 'none';
        document.getElementById("alsub").disabled= false;
    }
    if (x == 1)
    {
        document.getElementById("alsubblock").style.display = 'none';
        document.getElementById("olsubblock").style.display = 'block';
        document.getElementById("alsub").disabled= true;
    }
}

</script>


@endsection