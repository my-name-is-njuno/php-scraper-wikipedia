@extends('layouts.app')

@section('content')

            
            <div class="jumbotron text-center">
                <h1>Welcome to the Future</h1>

                <p class="lead">Scrapes Jobs from Kenya's Job websites, creates a cover letter and a cv and send applications to various employers for job listed on the site</p>
                <br>

                <img src="{{ asset('/jobs.jpg') }}" class="img-responsive" width="">

                <p>Sites being scraped include</p>

                

                    <a href="" target ="_blank">Jobmag</a><br>
                    <a href="" target ="_blank">Career Point Kenya</a><br>
                
            </div>

       
@endsection
