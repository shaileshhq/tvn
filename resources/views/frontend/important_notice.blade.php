@extends('frontend.layout.app')
@section('content')
    <!-- Page breadcrumb -->
    {{-- <section id="mu-page-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-page-breadcrumb-area">
                        <h2>School Documents</h2>
                        <ol class="breadcrumb">
                            <li><a href="{{ route('front.index') }}">Home</a></li>
                            <li class="active">School Documents</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- End breadcrumb -->
    <section id="important-notice">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Start Title -->
                    <div class="mu-title">
                        <h2>Important Notice</h2>
                    </div>
                    <!-- End Title -->
                </div>
            </div>
            <div class="row">
                <div class="component-template-catalog-content">
                    @forelse ($pdf_list as $data)
                        <div class="col-lg-3 mt-4">
                            <div class="component-grid">
                                <div class="component-grid-item">
                                    <div class="component-template-card">
                                        <div class="component-template-card-image-container">
                                            <a href="#" class="component-template-card-image-link"
                                                title="PDF Downloader">
                                                <div class="component-template-card-image-placeholder">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                                                        <path
                                                            d="M31.822 4c1.602 0 3.151.582 4.368 1.641l5.466 4.76A6.862 6.862 0 0144 15.575v28.086C44 46.058 42.088 48 39.729 48H12.27C9.912 48 8 46.058 8 43.662V8.338C8 5.942 9.912 4 12.271 4h19.55zm-.594 3.718H12.27a.615.615 0 00-.61.62v35.324c0 .342.273.62.61.62h27.46c.337 0 .61-.278.61-.62V16.193a.604.604 0 00-.594-.614h-.003l-6.727.035c-.656.003-1.19-.544-1.194-1.223V8.332a.604.604 0 00-.593-.614zm5.086 15.505c.172 0 .3.006.386.018a.817.817 0 01.291.112c.109.063.185.17.23.32.045.149.067.35.067.602s-.022.453-.067.603a.492.492 0 01-.235.313.928.928 0 01-.297.107 3.212 3.212 0 01-.397.017h-3.425v1.194h2.205c.179 0 .311.006.397.018a.87.87 0 01.297.112c.194.118.29.43.29.934 0 .552-.141.878-.425.98-.119.04-.31.06-.57.06h-2.194v2.234c0 .19-.006.327-.017.414a.988.988 0 01-.106.307c-.105.213-.396.32-.873.32-.523 0-.829-.15-.918-.45-.045-.126-.067-.327-.067-.603v-6.572c0-.402.07-.676.212-.821.142-.146.41-.219.806-.219h4.41zm-18.21 0c.656 0 1.294.252 1.913.757.306.244.556.575.75.992.194.418.291.883.291 1.395s-.097.975-.29 1.39a2.704 2.704 0 01-.75.986c-.62.504-1.262.757-1.926.757h-1.4v1.335c0 .181-.005.317-.016.408a.983.983 0 01-.106.313c-.105.213-.396.32-.873.32-.522 0-.829-.146-.918-.438-.045-.134-.067-.339-.067-.615v-6.56c0-.181.005-.317.017-.408a.985.985 0 01.106-.313c.104-.213.395-.319.873-.319h2.395zm5.288-.012l2.07.012c1.083 0 2.034.412 2.855 1.235.82.824 1.231 1.836 1.231 3.038 0 1.202-.401 2.232-1.203 3.091s-1.774 1.288-2.916 1.288h-2.048c-.455 0-.739-.098-.85-.295-.09-.166-.135-.418-.135-.757v-6.572c0-.189.005-.327.017-.413a.988.988 0 01.106-.308c.104-.212.395-.319.873-.319zm2.06 2.104h-1.075v4.468h1.086c.537 0 1.022-.21 1.455-.632.433-.422.649-.952.649-1.59 0-.638-.21-1.172-.633-1.602-.421-.43-.915-.644-1.483-.644zm-7.36 0h-1.4v2.092h1.411c.224 0 .444-.086.66-.26.217-.173.325-.433.325-.78 0-.347-.108-.609-.324-.786-.217-.177-.44-.266-.672-.266z">
                                                        </path>
                                                    </svg>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="component-template-card-info">
                                            <div class="component-template-card-name">
                                                <a href="{{ asset('storage/' . $data->pdf) }}"
                                                    class="component-template-card-name-link"
                                                    title="PDF Downloader">{{ $data->name }}</a>
                                                <div class="component-template-card-button-container">
                                                    <a href="{{ asset('storage/' . $data->pdf) }}"
                                                        class="component-template-card-button button-outline button-40 button-full-width button-blue button">
                                                        Live Preview
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-12 text-center">No data found</div>
                    @endforelse
                </div>
            </div>
        </div>
    </section>
@endsection
