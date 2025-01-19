@vite(['resources/css/projects.css'])
@extends('includes.bootstrap')
@section('content')
    <div class="container-project">
        @include('includes.header')
        <div class="projects-container">
            <div class="projects-header">
                <img src="{{ asset('images/projects_header.png') }}" alt="project header">
            </div>
            <div class="cards-container">
            <div class="parallelogram-card">
                    <div class="card-1">
                        <a href="https://yuliusobi.github.io/Dapur_Resep/recipes.html">
                            <div class="card-content">
                                <h2>Website Development</h2>    
                            </div>
                        </a>
                    </div>
                </div>
                <div class="parallelogram-card">
                <!--  -->
                    <div class="card-2">
                        <a href="https://www.canva.com/design/DAGQQMdb8yg/vnRmWkkOhY9fwkjE06UV_w/edit?utm_content=DAGQQMdb8yg&utm_campaign=designshare&utm_medium=link2&utm_source=sharebutton">
                            <div class="card-content">
                                <h2>Data Visualization</h2>    
                            </div>
                        </a>
                    </div>
                </div>
                <div class="parallelogram-card">
                    <div class="card-3">
                        <a href="https://bgdc.itch.io/std-quack">
                            <div class="card-content">
                                <h2>Game Project</h2>    
                            </div>
                        </a>
                    </div>
                </div>
                <div class="parallelogram-card">
                    <div class="card-4">
                        <a href="https://github.com/VTree3">
                            <div class="card-content">
                                <h2>Github</h2>    
                            </div>
                        </a>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
@endsection