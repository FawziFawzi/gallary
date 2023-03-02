<x-layout>
                        <h1 class="font-weight-bolder text-lg text-danger">After Admin Section/////////////////////////////</h1>
        <div class="page-content">
            <div class="container">
                <div class="row pp-section">
                    <div class="col-md-9">
                        <h1 class="h4">Contact Us</h1>
                        <p>Message us with any questions or inquiries. We would be happy to answer your question. </p>
                    </div>
                </div>
                <div class="container pp-contact px-0 mt-5">
                    <div class="row">
                        <div class="col-md-5 col-sm-12">
                            <div class="h4">Call or email</div>
                            <p>Support, Sales, and Photo Management services are currently available.</p>
                            <p class="pt-5"><b>Support</b></p>
                            <p>+800 3005 4523</p>
                            <p>Contact Support</p>
                            <p>Our technical support is available by phone or email from 11am to 7pm Monday through Friday.</p>
                            <p class="pt-5"><b>Sales</b></p>
                            <p>+800 3005 4523</p>
                            <p>Contact Support</p>
                            <p>Our technical support is available by phone or email from 11am to 7pm Monday through Friday.</p>
                            <p class="pt-5"><b>General Inquiries</b></p>
                            <p>info@example.com</p>
                        </div>
                        <div class="col-md-7 col-sm-12">
                            <div class="pp-contact-message">
                                <div class="h4 mb-3">Drop a Message</div>
                                <form action="/newsletter" method="POST">
                                         @csrf

                                    <div class="row">
                                        <div class="col-md-6 col-sm-12 mb-3">
                                            <input class="mr-3 form-control" type="text" name="first-name" placeholder="*First Name"/>
                                        </div>
                                        <div class="col-md-6 col-sm-12 mb-3">
                                            <input class="form-control" type="text" name="last-name" placeholder="*Last Name"/>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col">
                                            <input class="form-control" type="text" name="Subject" placeholder="*Subject"/>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col">
                                            <input class="form-control" type="email" name="email" placeholder="*E-mail"/>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col">
                                            <textarea class="form-control" name="message" placeholder="*Your Message"></textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <button class="btn btn-primary" type="submit">Send</button>
                                            @error('email')
                                            <span class="text-danger">{{ $message }}</span>
                                          @enderror
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pp-section"></div></div>
        </div>
    </div>
</x-layout>
