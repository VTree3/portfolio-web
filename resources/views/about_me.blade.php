@vite(['resources/css/projects.css'])
@extends('includes.bootstrap')
@section('content')
    <div class="container-project">
        @include('includes.header')
        <div class="projects-container">
            <div class="projects-header">
                <img src="{{ asset('images/about_me_header.png') }}" alt="project header">
            </div>
            <div class="about-me">
                <img src="{{asset('images/good-pasfoto.jpg')}}" alt="pasfoto">
                <div class="text-about-me">
                    <h1>Vetri Marvel Budiman</h1>
                    <h2 class ="title">Application Developer</h2>
                    <p>Application Developer who has a strong desire improving skills through hands-on experience. Has a strong understanding of various languages in website development, such as HTML, CSS, Javascript, Ruby, and PHP. Also has knowledge on how to work with various framework such as Laravel for PHP and Ruby on Rails for Ruby. Experienced in using Ubuntu OS, and Git for collaboration with others. Friendly and willing to learn, and collaborative with team members to reach shared goals.</p>
                    <button class="btn" id ="button-technical-skill">Technical Skills</button>
                    <button class="btn" id ="button-soft-skill">Soft Skills</button>
                    <div class="technical-skills hidden">
                        <button class="btn-disabled">Full-stack Development</button>
                        <button class="btn-disabled">Laravel</button>
                        <button class="btn-disabled">Ruby on Rails</button>
                        <button class="btn-disabled">Javascript</button>
                        <button class="btn-disabled">PHP</button>
                        <button class="btn-disabled">Java</button>
                        <button class="btn-disabled">Ruby</button>
                        <button class="btn-disabled">C</button>
                        <button class="btn-disabled">C#</button>
                        <button class="btn-disabled">Database</button>
                        <button class="btn-disabled">Docker</button>
                        <button class="btn-disabled">Code Debugging</button>
                        <button class="btn-disabled">Code Reviews</button>
                        <button class="btn-disabled">Git</button>
                    </div>
                    <div class="soft-skills hidden">
                        <button class="btn-disabled">Project Management</button>
                        <button class="btn-disabled">Troubleshooting</button>
                        <button class="btn-disabled">Interpersonal Skills</button>
                        <button class="btn-disabled">Communication</button>
                        <button class="btn-disabled">Public Speaking</button>
                        <button class="btn-disabled">Leadership</button>
                        <button class="btn-disabled">Teamwork</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        const button_technical = document.getElementById('button-technical-skill');
        const button_soft = document.getElementById('button-soft-skill');
        button_technical.addEventListener('click', techSkillPress);
        document.getElementById('button-soft-skill').addEventListener('click', softSkillPress);
        const techSkillsDiv = document.querySelector('.technical-skills');
        const softSkillsDiv = document.querySelector('.soft-skills');

        function techSkillPress() {
            techSkillsDiv.classList.toggle('hidden');
            button_technical.classList.toggle('btn-disabled');
            button_soft.classList.remove('btn-disabled');
            softSkillsDiv.classList.add('hidden');
        }

        function softSkillPress() {
            softSkillsDiv.classList.toggle('hidden');
            button_soft.classList.toggle('btn-disabled');
            button_technical.classList.remove('btn-disabled');
            techSkillsDiv.classList.add('hidden');
        }
    </script>
@endsection