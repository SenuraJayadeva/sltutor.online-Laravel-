
@extends('layouts.app')

@section('content')

<div class="row">
    <div
      class="col-md-2 d-xl-flex align-items-xl-start"
      style="margin: 25px 15px 0px ;">
      <section>
        <div class="row">
          <div class="col-md-12 text-center" style="margin: 15px;">

            <form action="/searchQuestions" method="get">

              <label>Sorted by subject</label>
              
              <select class="form-control">
                <optgroup label="This is a group">

                  <option value="Maths" selected="">Maths</option>
                  <option value="Biology">Biology</option>
                  <option value="Chemistry">Chemistry</option>
                
                </optgroup>

                
              </select>
            </form>


          </div>
        </div>
      </section>
    </div>
    <div class="col-md-8">
      <section>

           <!--For display error message or success messages-->

            @include('inc.messages')


        <div class="row">
           
          <div
            class="col-md-6 d-xl-flex justify-content-xl-center align-items-xl-center"
          >
            <div class="card"></div>
            <center>
            <h3 style="margin: 5px 0px 2px 0px">Question Bank</h3>
          </center>
          </div>
       
          <div class="col-md-6">
            <div class="card border-white">
              <div class="card-body text-center">
                <a href="/questionbank/create">
                <button class="btn btn-primary btn-sm" type="button">
                  Ask&nbsp; Question
                </button>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div
          class="row justify-content-center"
          style="background-color: #ffffff;"
        >
          <div class="col-md-12"  style="margin: 10px 0 px; padding: -3px;">

        <!--****************************** Question Bank Grid****************************-->

        
        @if(count($data['questions']) > 0)
           
        @foreach($data['questions'] as $question)

          
            <div class="border rounded-0 border-info shadow" style="background-color: #ffffff; padding: 0px;">
       
           
              <div class="row">

                <div class="col-sm-12 col-md-3 d-md-flex d-lg-flex d-xl-flex justify-content-center align-items-center justify-content-md-center align-items-md-center justify-content-lg-center align-items-lg-center justify-content-xl-center align-items-xl-center" >


                  <div class="row d-xl-flex align-items-center align-content-center align-self-center justify-content-xl-center align-items-xl-center" style="padding: 5px;">

                    <div class="col text-center">

                

                      @foreach($data['comments'] as $comments)

                      
                        @if( $comments->commentable_id ==  $question->id)
                 
                            <h1 style="font-size: 15px;">{{$comments->count}}</h1>

                       
                       @endif

                      

                      @endforeach

         

          
                      
                      <p style="font-size: 12px;">answers</p>
                    </div>
                    <div class="col text-center">
                      <h1 style="font-size: 15px;">{{$question->viewCount}}</h1>
                      <p style="font-size: 12px;">views</p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-12 col-md-9">
                  <div class="card border-white">
                    <div
                      class="card-body border-white"
                      style="padding: 0px 20px;"
                    >
                      <a
                        class="card-link"
                        href="/questionbank/{{$question->id}}"
                        style="
                          margin: 2px 0px;
                          padding: 5px 0px;
                          font-size: 20px;
                        "
                        >{{$question->title}}</a
                      >
                      <h6
                        class="text-muted card-subtitle mb-2"
                        style="
                          font-size: 14px;
                          padding: 2px 0px;
                          margin: 2px 0px;
                        "
                      >
                      {{$question->subject}}
                      </h6>
                      <h6
                        class="text-muted d-xl-flex card-subtitle mb-2"
                        style="font-size: 13px;"
                      >
                      {{$question->level}}
                      </h6>
                      <p style="font-size: 12px;">{{$question->created_at->diffForHumans()}}</p>
                    </div>
                  </div>

                </div>
            
              </div>

            </div>

            @endforeach

            <!--If there are no questions-->
            @else 

            <div>
                      <center>
                      <hr>
                      <h4 style="color: black">No Questions Yet</h4>
                      <img width="300px" src="/storage/assets/img/wait.png">
                      </center>
            </div>

         @endif
         

            <!--******************************End of Question Bank Grid****************************-->
           
          </div>
        </div>
      </section>
    </div>
    <div class="col"></div>
  </div>
</div>
</div>

@endsection
