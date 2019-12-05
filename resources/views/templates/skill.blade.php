<div class="page-inner-container">
    <ul id="hexGrid">
        @foreach ($data as $tool)
            <li class="hex">
                <a class="hexIn" href="#">
                    <img src="https://farm9.staticflickr.com/8461/8048823381_0fbc2d8efb.jpg" alt=""/>
                    <h1>
                        {{ $tool->name }}
                    </h1>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. At atque commodi consequatur
                        cupiditate dolore earum expedita, facere ipsum laborum nam placeat quam tempora, tenetur, ut
                        voluptates. Ipsa quidem tempora tempore?
                    </p>
                </a>
            </li>
        @endforeach
    </ul>
</div>
