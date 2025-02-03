@extends("layouts.app")

@section("title") Product List With Cart @endsection

@section("body")
    <section class="section">
        <div class="container">
            <h2 class="title-section text-capitalize d-flex align-items-center gap-2 title-medium">product list</h2>

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-3">
                <div class="col">
                    <div class="card card-primary">
                        <div class="position-relative mb-30">
                            <a href="{{ route("page.product.details", ["id" => 1]) }}">
                                <img 
                                    src="{{ asset("/src/assets/images/image-baklava-desktop.jpg") }}" 
                                    alt="" 
                                    loading="lazy"
                                    class="rounded-4 img-cover"
                                />
                            </a>

                            <div class="w-100 position-absolute" style="bottom: -22px;">
                                <form data-add-order>
                                    @csrf
    
                                    <button type="submit" class="btn btn-third mx-auto label-small">
                                        <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-shopping-cart"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M6 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M17 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M17 17h-11v-14h-2" /><path d="M6 5l14 1l-1 7h-13" /></svg>
    
                                        add to card
                                    </button>
                                </form>

                                {{-- <form data-remove-order>
                                    @csrf

                                    <button class="btn btn-primary w-44px h-44px p-0 mx-auto">
                                        <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-shopping-cart-copy"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 19a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" /><path d="M11.5 17h-5.5v-14h-2" /><path d="M6 5l14 1l-1 7h-13" /><path d="M15 19l2 2l4 -4" /></svg>
                                    </button>
                                </form> --}}
                            </div>
                        </div>

                        <div class="content">
                            <h3 class="text-truncate mb-5 label-medium">Lorem ipsum dolor.</h3>

                            <p class="truncate-line-2 mb-5 text-second-color">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Hic temporibus officiis reprehenderit? Repudiandae, voluptates minima numquam, optio id quo nemo facere delectus tempore repellendus libero, quia provident sed voluptate eum aliquid nostrum! Quas suscipit, ipsam doloremque voluptas vero fuga? Reprehenderit possimus non ullam ratione consequatur officiis. Cum quod omnis similique minus. Eum cumque, eos ea delectus est natus cupiditate? Nisi praesentium aliquam quisquam suscipit autem eveniet optio sapiente consequatur eligendi odio quibusdam voluptatem, debitis, qui enim dolor nulla, dignissimos omnis necessitatibus tempora! Dignissimos aspernatur possimus, unde, ex mollitia pariatur velit, quaerat minus nihil quam dolores at autem. Quaerat, ut sapiente.</p>

                            <span class="text-orange-color label-small">$16.3</span>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card card-primary">
                        <div class="position-relative mb-30">
                            <a href="{{ route("page.product.details", ["id" => 1]) }}">
                                <img 
                                    src="{{ asset("/src/assets/images/image-baklava-desktop.jpg") }}" 
                                    alt="" 
                                    loading="lazy"
                                    class="rounded-4 img-cover"
                                />
                            </a>

                            <div class="w-100 position-absolute" style="bottom: -22px;">
                                <form data-add-order>
                                    @csrf
    
                                    <button type="submit" class="btn btn-third mx-auto label-small">
                                        <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-shopping-cart"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M6 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M17 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M17 17h-11v-14h-2" /><path d="M6 5l14 1l-1 7h-13" /></svg>
    
                                        add to card
                                    </button>
                                </form>

                                {{-- <form data-remove-order>
                                    @csrf

                                    <button class="btn btn-primary w-44px h-44px p-0 mx-auto label-small">
                                        <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-shopping-cart-copy"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 19a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" /><path d="M11.5 17h-5.5v-14h-2" /><path d="M6 5l14 1l-1 7h-13" /><path d="M15 19l2 2l4 -4" /></svg>
                                    </button>
                                </form> --}}
                            </div>
                        </div>

                        <div class="content">
                            <h3 class="text-truncate mb-5 label-medium">Lorem ipsum dolor.</h3>

                            <p class="truncate-line-2 mb-5 text-second-color">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Hic temporibus officiis reprehenderit? Repudiandae, voluptates minima numquam, optio id quo nemo facere delectus tempore repellendus libero, quia provident sed voluptate eum aliquid nostrum! Quas suscipit, ipsam doloremque voluptas vero fuga? Reprehenderit possimus non ullam ratione consequatur officiis. Cum quod omnis similique minus. Eum cumque, eos ea delectus est natus cupiditate? Nisi praesentium aliquam quisquam suscipit autem eveniet optio sapiente consequatur eligendi odio quibusdam voluptatem, debitis, qui enim dolor nulla, dignissimos omnis necessitatibus tempora! Dignissimos aspernatur possimus, unde, ex mollitia pariatur velit, quaerat minus nihil quam dolores at autem. Quaerat, ut sapiente.</p>

                            <span class="text-orange-color label-small">$16.3</span>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card card-primary">
                        <div class="position-relative mb-30">
                            <a href="{{ route("page.product.details", ["id" => 1]) }}">
                                <img 
                                    src="{{ asset("/src/assets/images/image-baklava-desktop.jpg") }}" 
                                    alt="" 
                                    loading="lazy"
                                    class="rounded-4 img-cover"
                                />
                            </a>

                            <div class="w-100 position-absolute" style="bottom: -22px;">
                                <form data-add-order>
                                    @csrf
    
                                    <button type="submit" class="btn btn-third mx-auto label-small">
                                        <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-shopping-cart"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M6 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M17 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M17 17h-11v-14h-2" /><path d="M6 5l14 1l-1 7h-13" /></svg>
    
                                        add to card
                                    </button>
                                </form>

                                {{-- <form data-remove-order>
                                    @csrf

                                    <button class="btn btn-primary w-44px h-44px p-0 mx-auto label-small">
                                        <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-shopping-cart-copy"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 19a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" /><path d="M11.5 17h-5.5v-14h-2" /><path d="M6 5l14 1l-1 7h-13" /><path d="M15 19l2 2l4 -4" /></svg>
                                    </button>
                                </form> --}}
                            </div>
                        </div>

                        <div class="content">
                            <h3 class="text-truncate mb-5 label-medium">Lorem ipsum dolor.</h3>

                            <p class="truncate-line-2 mb-5 text-second-color">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Hic temporibus officiis reprehenderit? Repudiandae, voluptates minima numquam, optio id quo nemo facere delectus tempore repellendus libero, quia provident sed voluptate eum aliquid nostrum! Quas suscipit, ipsam doloremque voluptas vero fuga? Reprehenderit possimus non ullam ratione consequatur officiis. Cum quod omnis similique minus. Eum cumque, eos ea delectus est natus cupiditate? Nisi praesentium aliquam quisquam suscipit autem eveniet optio sapiente consequatur eligendi odio quibusdam voluptatem, debitis, qui enim dolor nulla, dignissimos omnis necessitatibus tempora! Dignissimos aspernatur possimus, unde, ex mollitia pariatur velit, quaerat minus nihil quam dolores at autem. Quaerat, ut sapiente.</p>

                            <span class="text-orange-color label-small">$16.3</span>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card card-primary">
                        <div class="position-relative mb-30">
                            <a href="{{ route("page.product.details", ["id" => 1]) }}">
                                <img 
                                    src="{{ asset("/src/assets/images/image-baklava-desktop.jpg") }}" 
                                    alt="" 
                                    loading="lazy"
                                    class="rounded-4 img-cover"
                                />
                            </a>

                            <div class="w-100 position-absolute" style="bottom: -22px;">
                                <form data-add-order>
                                    @csrf
    
                                    <button type="submit" class="btn btn-third mx-auto label-small">
                                        <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-shopping-cart"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M6 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M17 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M17 17h-11v-14h-2" /><path d="M6 5l14 1l-1 7h-13" /></svg>
    
                                        add to card
                                    </button>
                                </form>

                                {{-- <form data-remove-order>
                                    @csrf

                                    <button class="btn btn-primary w-44px h-44px p-0 mx-auto label-small">
                                        <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-shopping-cart-copy"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 19a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" /><path d="M11.5 17h-5.5v-14h-2" /><path d="M6 5l14 1l-1 7h-13" /><path d="M15 19l2 2l4 -4" /></svg>
                                    </button>
                                </form> --}}
                            </div>
                        </div>

                        <div class="content">
                            <h3 class="text-truncate mb-5 label-medium">Lorem ipsum dolor.</h3>

                            <p class="truncate-line-2 mb-5 text-second-color">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Hic temporibus officiis reprehenderit? Repudiandae, voluptates minima numquam, optio id quo nemo facere delectus tempore repellendus libero, quia provident sed voluptate eum aliquid nostrum! Quas suscipit, ipsam doloremque voluptas vero fuga? Reprehenderit possimus non ullam ratione consequatur officiis. Cum quod omnis similique minus. Eum cumque, eos ea delectus est natus cupiditate? Nisi praesentium aliquam quisquam suscipit autem eveniet optio sapiente consequatur eligendi odio quibusdam voluptatem, debitis, qui enim dolor nulla, dignissimos omnis necessitatibus tempora! Dignissimos aspernatur possimus, unde, ex mollitia pariatur velit, quaerat minus nihil quam dolores at autem. Quaerat, ut sapiente.</p>

                            <span class="text-orange-color label-small">$16.3</span>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card card-primary">
                        <div class="position-relative mb-30">
                            <a href="{{ route("page.product.details", ["id" => 1]) }}">
                                <img 
                                    src="{{ asset("/src/assets/images/image-baklava-desktop.jpg") }}" 
                                    alt="" 
                                    loading="lazy"
                                    class="rounded-4 img-cover"
                                />
                            </a>

                            <div class="w-100 position-absolute" style="bottom: -22px;">
                                <form data-add-order>
                                    @csrf
    
                                    <button type="submit" class="btn btn-third mx-auto label-small">
                                        <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-shopping-cart"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M6 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M17 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M17 17h-11v-14h-2" /><path d="M6 5l14 1l-1 7h-13" /></svg>
    
                                        add to card
                                    </button>
                                </form>

                                {{-- <form data-remove-order>
                                    @csrf

                                    <button class="btn btn-primary w-44px h-44px p-0 mx-auto label-small">
                                        <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-shopping-cart-copy"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 19a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" /><path d="M11.5 17h-5.5v-14h-2" /><path d="M6 5l14 1l-1 7h-13" /><path d="M15 19l2 2l4 -4" /></svg>
                                    </button>
                                </form> --}}
                            </div>
                        </div>

                        <div class="content">
                            <h3 class="text-truncate mb-5 label-medium">Lorem ipsum dolor.</h3>

                            <p class="truncate-line-2 mb-5 text-second-color">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Hic temporibus officiis reprehenderit? Repudiandae, voluptates minima numquam, optio id quo nemo facere delectus tempore repellendus libero, quia provident sed voluptate eum aliquid nostrum! Quas suscipit, ipsam doloremque voluptas vero fuga? Reprehenderit possimus non ullam ratione consequatur officiis. Cum quod omnis similique minus. Eum cumque, eos ea delectus est natus cupiditate? Nisi praesentium aliquam quisquam suscipit autem eveniet optio sapiente consequatur eligendi odio quibusdam voluptatem, debitis, qui enim dolor nulla, dignissimos omnis necessitatibus tempora! Dignissimos aspernatur possimus, unde, ex mollitia pariatur velit, quaerat minus nihil quam dolores at autem. Quaerat, ut sapiente.</p>

                            <span class="text-orange-color label-small">$16.3</span>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card card-primary">
                        <div class="position-relative mb-30">
                            <a href="{{ route("page.product.details", ["id" => 1]) }}">
                                <img 
                                    src="{{ asset("/src/assets/images/image-baklava-desktop.jpg") }}" 
                                    alt="" 
                                    loading="lazy"
                                    class="rounded-4 img-cover"
                                />
                            </a>

                            <div class="w-100 position-absolute" style="bottom: -22px;">
                                <form data-add-order>
                                    @csrf
    
                                    <button type="submit" class="btn btn-third mx-auto label-small">
                                        <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-shopping-cart"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M6 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M17 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M17 17h-11v-14h-2" /><path d="M6 5l14 1l-1 7h-13" /></svg>
    
                                        add to card
                                    </button>
                                </form>

                                {{-- <form data-remove-order>
                                    @csrf

                                    <button class="btn btn-primary w-44px h-44px p-0 mx-auto label-small">
                                        <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-shopping-cart-copy"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 19a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" /><path d="M11.5 17h-5.5v-14h-2" /><path d="M6 5l14 1l-1 7h-13" /><path d="M15 19l2 2l4 -4" /></svg>
                                    </button>
                                </form> --}}
                            </div>
                        </div>

                        <div class="content">
                            <h3 class="text-truncate mb-5 label-medium">Lorem ipsum dolor.</h3>

                            <p class="truncate-line-2 mb-5 text-second-color">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Hic temporibus officiis reprehenderit? Repudiandae, voluptates minima numquam, optio id quo nemo facere delectus tempore repellendus libero, quia provident sed voluptate eum aliquid nostrum! Quas suscipit, ipsam doloremque voluptas vero fuga? Reprehenderit possimus non ullam ratione consequatur officiis. Cum quod omnis similique minus. Eum cumque, eos ea delectus est natus cupiditate? Nisi praesentium aliquam quisquam suscipit autem eveniet optio sapiente consequatur eligendi odio quibusdam voluptatem, debitis, qui enim dolor nulla, dignissimos omnis necessitatibus tempora! Dignissimos aspernatur possimus, unde, ex mollitia pariatur velit, quaerat minus nihil quam dolores at autem. Quaerat, ut sapiente.</p>

                            <span class="text-orange-color label-small">$16.3</span>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card card-primary">
                        <div class="position-relative mb-30">
                            <a href="{{ route("page.product.details", ["id" => 1]) }}">
                                <img 
                                    src="{{ asset("/src/assets/images/image-baklava-desktop.jpg") }}" 
                                    alt="" 
                                    loading="lazy"
                                    class="rounded-4 img-cover"
                                />
                            </a>

                            <div class="w-100 position-absolute" style="bottom: -22px;">
                                <form data-add-order>
                                    @csrf
    
                                    <button type="submit" class="btn btn-third mx-auto label-small">
                                        <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-shopping-cart"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M6 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M17 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M17 17h-11v-14h-2" /><path d="M6 5l14 1l-1 7h-13" /></svg>
    
                                        add to card
                                    </button>
                                </form>

                                {{-- <form data-remove-order>
                                    @csrf

                                    <button class="btn btn-primary w-44px h-44px p-0 mx-auto label-small">
                                        <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-shopping-cart-copy"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 19a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" /><path d="M11.5 17h-5.5v-14h-2" /><path d="M6 5l14 1l-1 7h-13" /><path d="M15 19l2 2l4 -4" /></svg>
                                    </button>
                                </form> --}}
                            </div>
                        </div>

                        <div class="content">
                            <h3 class="text-truncate mb-5 label-medium">Lorem ipsum dolor.</h3>

                            <p class="truncate-line-2 mb-5 text-second-color">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Hic temporibus officiis reprehenderit? Repudiandae, voluptates minima numquam, optio id quo nemo facere delectus tempore repellendus libero, quia provident sed voluptate eum aliquid nostrum! Quas suscipit, ipsam doloremque voluptas vero fuga? Reprehenderit possimus non ullam ratione consequatur officiis. Cum quod omnis similique minus. Eum cumque, eos ea delectus est natus cupiditate? Nisi praesentium aliquam quisquam suscipit autem eveniet optio sapiente consequatur eligendi odio quibusdam voluptatem, debitis, qui enim dolor nulla, dignissimos omnis necessitatibus tempora! Dignissimos aspernatur possimus, unde, ex mollitia pariatur velit, quaerat minus nihil quam dolores at autem. Quaerat, ut sapiente.</p>

                            <span class="text-orange-color label-small">$16.3</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection