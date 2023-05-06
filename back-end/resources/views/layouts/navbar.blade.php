<nav id="navbar">
            <div class="menu">
                <input type="checkbox" id="check">
                <div class="logo">
                    <a href="#">
                        <img src="{{ asset('/images/logo .png') }}" alt="" class="logo_img">
                    </a>
                </div>
                <ul>
                    <label class="btn cancel">
                        <i class="fa fa-close"></i>
                    </label>
                    <li>
                        <a href="#services" class="lang" key="services">services</a>
                    </li>
                    <li>
                        <a href="#stock" class="lang" key="stock">stock</a>
                    </li>
                    <li>
                        <a href="#about" class="lang" key="about">About</a>
                    </li>
                    <li>
                        <a href="#contact" class="lang" key="contact">Contact</a>
                    </li>
                    <li class="enroll_li">
                        <a href="" class="enroll lang" key="enroll">enroll</a>
                    </li>
                    <div class="language_container">
                @foreach (config('app.available_locales') as $index => $locale)
                @if ($locale === app()->getLocale())
                <a class="lang-button active_lang" onclick="switchLocale('{{ $locale }}')" style="{{ $index === 0 ? 'border-right: 1px solid black;' : '' }}">{{ strtoupper($locale) }}</a>
                @else
                <a class="lang-button" onclick="switchLocale('{{ $locale }}')" style="{{ $index === 0 ? 'border-right: 1px solid black;' : '' }}">{{ strtoupper($locale) }}</a>
                @endif
                @endforeach
            </div>
                </ul>
                <label for="check" class="btn bars">
                    <i class="fa fa-bars"></i>
                </label>
            </div>
        </div>
    </nav>