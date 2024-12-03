@extends('layout', ['hideHero' => true])

@section('content')
<div style="background: linear-gradient(135deg, rgba(13, 110, 253, 0.3), rgba(255, 255, 241, .5)); padding: 50px 20px;">
    <div class="container" style="padding: 40px; border-radius: 20px; box-shadow: 0 20px 50px rgba(0, 0, 0, 0.5); background: linear-gradient(145deg, rgba(28, 31, 42, 0.95), rgba(47, 128, 237, 0.9));">

        <!-- Experience Section -->
        <section class="mb-5">
            <h2 style="font-size: 1.8rem; font-weight: bold; color: #FFD700; text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.8);">
                Experience
            </h2>
            <ul style="margin-top: 20px; color: #E3F2FD; font-size: 1.2rem; line-height: 1.8;">
                @foreach($experiences as $experience)
                    <li>
                        <strong>{{ $experience->position }}<br>{{ $experience->company }}</strong>: 
                        {{ $experience->description }}
                    </li>
                @endforeach
            </ul>
        </section>

        <!-- Education Section -->
        <section class="mb-5">
            <h2 style="font-size: 1.8rem; font-weight: bold; color: #FFD700; text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.8);">
                Education
            </h2>
            @foreach($educations as $education)
                <p style="color: #E3F2FD; font-size: 1.2rem; line-height: 1.8;">
                    <strong>{{ $education->school }}</strong><br>
                    @if($education->degree || $education->major)
                    <strong>{{ $education->degree }} {{ $education->major }}</strong><br>
                    @endif
                    {{ \Carbon\Carbon::parse($education->start)->format('Y') }} sampai {{ $education->end ? \Carbon\Carbon::parse($education->end)->format('Y') : 'Sekarang' }}<br>{{ $education->location }}
                </p>
            @endforeach
        </section>

        <!-- Training Section -->
        <section class="mb-5">
            <h2 style="font-size: 1.8rem; font-weight: bold; color: #FFD700; text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.8);">
                Training
            </h2>
            <ul style="color: #E3F2FD; font-size: 1.2rem; line-height: 1.8; margin-top: 15px;">
                @foreach($trainings as $training)
                    <li>{{ $training->title }} - {{ $training->organization }} ({{ $training->start }} sampai {{ $training->end }})</li>
                @endforeach
            </ul>
        </section>

        <!-- Certification Section -->
        <section class="mb-5">
            <h2 style="font-size: 1.8rem; font-weight: bold; color: #FFD700; text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.8);">
                Certification
            </h2>
            <ul style="color: #E3F2FD; font-size: 1.2rem; line-height: 1.8; margin-top: 15px;">
                @foreach($certifications as $certification)
                    <li>{{ $certification->title }} - {{ $certification->organization }} (Tanggal Terbit: {{ $certification->issue_date }} | Tanggal Kadaluarsa: {{ $certification->expiry_date }})</li>
                @endforeach
            </ul>
        </section>

        <!-- Contact Me Section -->
        <section class="text-center">
            <h2 style="font-size: 1.8rem; font-weight: bold; color: #FFD700; text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.8); margin-bottom: 20px;">
                Contact Me
            </h2>
            <p style="color: #E3F2FD; font-size: 1.2rem; margin-bottom: 30px;">
                Let's connect! Find me on:
            </p>
            <div>
                <a href="https://www.linkedin.com/in/muhammad-afrisal-yusril-arzaqi-29b480246/" target="_blank" class="btn btn-outline-light mx-2" style="padding: 12px 30px; font-size: 1.2rem; font-weight: bold; color: #FFD700; border-color: #FFD700; border-radius: 50px; transition: all 0.3s;">
                    LinkedIn
                </a>
                <a href="https://www.instagram.com/afriszall" target="_blank" class="btn btn-outline-light mx-2" style="padding: 12px 30px; font-size: 1.2rem; font-weight: bold; color: #FFD700; border-color: #FFD700; border-radius: 50px; transition: all 0.3s;">
                    Instagram
                </a>
            </div>
        </section>

        <div class="position-fixed bottom-0 end-0 m-4">
            <a href="/" class="btn btn-warning btn-lg rounded-pill shadow">Back Page</a>
        </div>
    </div>
</div>
@endsection
