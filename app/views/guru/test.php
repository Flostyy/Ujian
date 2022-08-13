    <ul class="nomor">
        <li>
            <button type="button"  class="no btn btn-md btn-outline-success ml-1 active" data-cont="r1">1</button>
        </li>
        <li>
            <button type="button"  class="no btn btn-md btn-outline-success ml-1" data-cont="r2">2</button>
        </li>
        <li>
            <button type="button"  class="no btn btn-md btn-outline-success ml-1" data-cont="r3">3</button>
        </li>
        <li>
            <button type="button"  class="no btn btn-md btn-outline-success ml-1" data-cont="r4">4</button>
        </li>
        <li>
            <button type="button"  class="no btn btn-md btn-outline-success ml-1" data-cont="r5">5</button>
        </li>

        <li>
            <button type="button"  class="no btn btn-md btn-outline-success ml-1" data-cont="r6">6</button>
        </li>
        <li>
            <button type="button"  class="no btn btn-md btn-outline-success ml-1" data-cont="r7">7</button>
        </li>
        <li>
            <button type="button"  class="no btn btn-md btn-outline-success ml-1" data-cont="r8">8</button>
        </li>
        <li>
            <button type="button"  class="no btn btn-md btn-outline-success ml-1" data-cont="r9">9</button>
        </li>
        <li>
            <button type="button"  class="no btn btn-md btn-outline-success ml-1" data-cont="r10">10</button>
        </li>        
    </ul>



<section id="r1" class="section section-one active">
<h2>section 1</h2>
</section>
<section id="r2" class="section section-two">
<h2>section 2</h2>
</section>
<section id="r3" class="section section-three">
<h2>section 3</h2>
</section>
<section id="r4" class="section section-four">
<h2>section 4</h2>
</section>
<section id="r5" class="section section-five">
<h2>section 5</h2>
</section>
<section id="r6" class="section section-six">
<h2>section 6</h2>
</section>
<section id="r7" class="section section-seven">
<h2>section 7</h2>
</section>
<section id="r8" class="section section-eight">
<h2>section 8</h2>
</section>
<section id="r9" class="section section-nine">
<h2>section 9</h2>
</section>
<section id="r10" class="section section-ten">
<h2>section 10</h2>
</section>

<button class="previous disable" id="previous">Previous</button>
<button class="next" id="next">Next</button>

<script>
let currentSection = 0;
let sections = document.querySelectorAll(".section");
let sectionButtons = document.querySelectorAll(".nomor > li > button");
let nextButton = document.querySelector(".next");
let previousButton = document.querySelector(".previous");
for (let i = 0; i < sectionButtons.length; i++) {
    sectionButtons[i].addEventListener("click", function() {
        sections[currentSection].classList.remove("active");
        sectionButtons[currentSection].classList.remove("active");
        sections[currentSection = i].classList.add("active");
        sectionButtons[currentSection].classList.add("active");
        if (i === 0) {
            if (previousButton.className.split(" ").indexOf("disable") < 0) {
                previousButton.classList.add("disable");
            }
        } else {
            if (previousButton.className.split(" ").indexOf("disable") >= 0) {
                previousButton.classList.remove("disable");
            }
        }
        if (i === sectionButtons.length - 1) {
            if (nextButton.className.split(" ").indexOf("disable") < 0) {
                nextButton.classList.add("disable");
            }
        } else {
            if (nextButton.className.split(" ").indexOf("disable") >= 0) {
                nextButton.classList.remove("disable");
            }
        }
    });
}

nextButton.addEventListener("click", function() {
    if (currentSection < sectionButtons.length - 1) {
        sectionButtons[currentSection + 1].click();
    }
});

previousButton.addEventListener("click", function() {
    if (currentSection > 0) {
        sectionButtons[currentSection - 1].click();
    }
});
</script>