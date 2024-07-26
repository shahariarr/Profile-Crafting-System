@extends('layouts.master-user')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-lg">
                    <div class="card-body">
                        <h4 class="card-title text-center mb-4">Add Skill</h4>
                        <form>
                            {{-- Uncomment this section if you want to include Skill Type --}}
                            {{--
                            <div class="form-group mb-3">
                                <label for="skillType">Skill Type</label>
                                <select class="form-control" id="skillType" name="type">
                                    <option value="technical">Technical</option>
                                    <option value="soft">Soft</option>
                                </select>
                            </div>
                            --}}
                            <div class="form-group mb-3">
                                <label for="states">Skills</label>
                                <select class="js-example-basic-multiple form-control" id="states" name="states[]" multiple="multiple">
                                    <option value="html">HTML</option>
                                    <option value="css">CSS</option>
                                    <option value="javascript">JavaScript</option>
                                    <option value="react">React</option>
                                    <option value="nextjs">Next JS</option>
                                    <option value="nuxtjs">Nuxt JS</option>
                                    <option value="nodejs">Node JS</option>
                                    <option value="vue">Vue</option>
                                    <option value="angular">Angular</option>
                                    <option value="docker">Docker</option>
                                    <option value="photoshop">Photoshop</option>
                                    <option value="illustrator">Illustrator</option>
                                    <option value="svelte">Svelte</option>
                                    <option value="gcp">GCP</option>
                                    <option value="azure">Azure</option>
                                    <option value="fastify">Fastify</option>
                                    <option value="haxe">Haxe</option>
                                    <option value="ionic">Ionic</option>
                                    <option value="markdown">Markdown</option>
                                    <option value="microsoft-office">Microsoft Office</option>
                                    <option value="picsart">Picsart</option>
                                    <option value="sketch">Sketch</option>
                                    <option value="unity">Unity</option>
                                    <option value="wolframalpha">WolframAlpha</option>
                                    <option value="adobe-xd">Adobe XD</option>
                                    <option value="after-effects">After Effects</option>
                                    <option value="bootstrap">Bootstrap</option>
                                    <option value="bulma">Bulma</option>
                                    <option value="capacitorjs">CapacitorJs</option>
                                    <option value="coffeescript">Coffeescript</option>
                                    <option value="memsql">MemSQL</option>
                                    <option value="c">C</option>
                                    <option value="cpp">C++</option>
                                    <option value="csharp">C#</option>
                                    <option value="python">Python</option>
                                    <option value="java">Java</option>
                                    <option value="julia">Julia</option>
                                    <option value="matlab">Matlab</option>
                                    <option value="swift">Swift</option>
                                    <option value="ruby">Ruby</option>
                                    <option value="kotlin">Kotlin</option>
                                    <option value="go">Go</option>
                                    <option value="php">PHP</option>
                                    <option value="flutter">Flutter</option>
                                    <option value="dart">Dart</option>
                                    <option value="typescript">Typescript</option>
                                    <option value="git">Git</option>
                                    <option value="figma">Figma</option>
                                    <option value="canva">Canva</option>
                                    <option value="ubuntu">Ubuntu</option>
                                    <option value="mongodb">MongoDB</option>
                                    <option value="tailwind">Tailwind</option>
                                    <option value="vitejs">ViteJS</option>
                                    <option value="vuetifyjs">VuetifyJS</option>
                                    <option value="mysql">MySQL</option>
                                    <option value="postgresql">PostgreSQL</option>
                                    <option value="aws">AWS</option>
                                    <option value="firebase">Firebase</option>
                                    <option value="blender">Blender</option>
                                    <option value="premiere-pro">Premiere Pro</option>
                                    <option value="adobe-audition">Adobe Audition</option>
                                    <option value="deno">Deno</option>
                                    <option value="django">Django</option>
                                    <option value="gimp">Gimp</option>
                                    <option value="graphql">Graphql</option>
                                    <option value="lightroom">Lightroom</option>
                                    <option value="materialui">MaterialUI</option>
                                    <option value="nginx">Nginx</option>
                                    <option value="numpy">Numpy</option>
                                    <option value="opencv">OpenCV</option>
                                    <option value="pytorch">Pytorch</option>
                                    <option value="selenium">Selenium</option>
                                    <option value="strapi">Strapi</option>
                                    <option value="tensorflow">Tensorflow</option>
                                    <option value="webex">Webex</option>
                                    <option value="wordpress">Wordpress</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Add Skill</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $('.js-example-basic-multiple').select2({
                placeholder: "Select skills",
                allowClear: true
            });
        });
    </script>
@endpush
