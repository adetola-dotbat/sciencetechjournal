@extends('user.layout.master')
@section('pageName')
    Manuscript
@endsection
@section('content')
    <header class="page-title pt-large pt-dark pt-plax-lg-dark" data-stellar-background-ratio="0.4">
        <div class="container">
            <div class="row">

                <div class="col-sm-6">
                    <h1>Manuscript</h1>
                    <span class="subheading">send your manuscript</span>
                </div>
                <ol class="col-sm-6 text-right breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active">manuscript</li>
                </ol>
            </div>
        </div>
    </header>

    <!-- ========== Contact ========== -->

    <section id="contact" class="contact-3">
        <div class="container">
            <div class="row">

                <div class="col-md-12 col-lg-offset-2 col-lg-8">
                    <div class="form-wrapper">
                        <div class="from-header">
                            <h2>Send your manuscript</h2>
                            <p>Use the form below to submit your manuscript.</p>
                        </div>

                        <form action="{{ route('store.manuscript') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('post')
                            <div class="form-group">
                                <input type="text" name="title" id="name-contact-3"
                                    class="form-control validate-locally" required>
                                <label for="name-contact-3">Title *</label>
                                <span class="pull-right alert-error"></span>
                            </div>

                            <!-- Email -->
                            <div class="form-group">
                                <input type="text" name="authors" id="email-contact-3"
                                    class="form-control validate-locally" required>
                                <label for="email-contact-3">Author *</label>
                                <span class="pull-right alert-error"></span>
                            </div>

                            <!-- Phone -->
                            <div class="form-group ws-s">
                                <input type="file" name="file" id="phone-contact-3" class="form-control" required>
                                <label for="email-contact-3">File</label>
                            </div>

                            <!-- Message -->
                            <div class="form-group">
                                <p>Tell us about your work</p>
                                <textarea class="form-control" name="abstract" id="message-contact-1" rows="5" required></textarea>
                                <label for="message-contact-1">Abstract *</label>
                            </div>

                            <input type="submit" class="btn-text" value="Send Message">

                            <!-- Ajax Message -->
                            <div class="ajax-message"></div>

                        </form>
                    </div>
                </div>

            </div>
        </div><!-- / .container -->
    </section><!-- / .contact-3 -->
@endsection
