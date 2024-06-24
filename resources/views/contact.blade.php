@extends('common.master')

@section('script')
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
@endsection

@section('content')
    <div class="columns contact-columns">
        <div class="column is-12 has-text-centered"><h1 class="title is-1">Questions? Contact Us</h1></div>
    </div>

    <section class="section contact-section">
        <div class="container">
            <div class="columns">
                <div class="card contact-card">
                    <div class="card-content">
                        <div class="content contact-content">

                            <span class="icon-text">
                                <span class="icon is-large mb-4">
                                    <i class="fas fa-2x fa-user"></i>
                                </span>
                                <span class="is-size-4">Joeri Versluis</span>
                            </span>
                            <br>
                            <span class="icon-text">
                                <span class="icon is-large mb-4">
                                    <i class="fas fa-2x fa-phone"></i>
                                </span>
                                <span class="is-size-4 is-spaced">06-123-456-78</span>
                            </span>
                            <br>
                            <span class="icon-text">
                                <span class="icon is-large mb-6">
                                    <i class="fas fa-2x fa-at"></i>
                                </span>
                                <span class="is-size-4">joeriversluis002@hz.nl</span>
                            </span>
                            <br>
                            <a href="https://www.linkedin.com/">
                            <a href="https://www.metaverse.com/">
                            <span class="icon-text">
                                <span class="icon is-large">
                                    <i class="fab fa-2x fa-linkedin"></i>
                                </span>
                            </span>
                            </a>

                        </div>
                    </div>
                </div>

                <section class="hero  is-medium  is-bold">
                    <div class="header-img columns">
                        <div class="column">
                            <img class="contact-picture" src="./image/contact.png"/>
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </section>
@endsection
