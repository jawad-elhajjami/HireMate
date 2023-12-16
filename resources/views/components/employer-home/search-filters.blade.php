<div id="filters-card" class="hidden absolute w-[378px] top-24 right-44 bg-white z-50 p-5 shadow-xl ">
    <form action="#" method="get">
        <div class="card-head flex pb-6 mt-0">
            <h1 class="flex-1 text-lg">Filters</h1>
            <span id="btn-close-filters-card" class="rounded-full p-1 hover:bg-gray-100 cursor-pointer">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M18 6L6 18" stroke="#888888" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M6 6L18 18" stroke="#888888" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>                
            </span>
        </div>
        
        <div class="salary-section pb-5">
            <div class="flex">
                <h3 class="flex-1">Average salary</h3>
                <h3 id="value-range-salary">$0+</h3>
            </div>
            <input type="range" name="salary range" min="0" max="45000" value="0" id="range-salary">
            <div class="flex mt-1">
                <p class="flex-1 text-sm">$0+</p>
                <p class="text-sm">$45,000</p>
            </div>
        </div>
        <hr>
        <div class="schedule-section py-5">
            <h3>Shedule</h3>
            <div class="flex mt-3">
                <input type="checkbox" name="box-full-time" id="box-full-time">
                <label for="box-full-time" class="mr-2">Full-time</label>            
                <input type="checkbox" name="box-part-time" id="box-part-time">
                <label for="box-part-time">Part-time</label>
            </div>
        </div>
        <hr>
        <div class="experience-section py-5">
            <div class="flex">
                <h3 class="flex-1">Required experience</h3>
                <h3 id="value-range-experience">0+ years</h3>
            </div>
            <input type="range" min="0" max="7" value="0" id="range-experience">
            <div class="flex my-1">
                <p class="flex-1 text-sm">0 years</p>
                <p class="text-sm">7 years</p>
            </div>
            <input type="checkbox" name="any-experience" id="any-experience">
            <label for="any-experience">Any experience level</label>
        </div>
        <hr>
        <div class="industry-section py-5">
            <h3 class="mb-2">Industry</h3>
            <input type="checkbox" name="tech" id="tech-checkbox">
            <label for="tech-checkbox">Tech</label><br>
            <input type="checkbox" name="Consulting" id="consulting-checkbox">
            <label for="consulting-checkbox">Consulting</label><br>
            <input type="checkbox" name="advertising" id="advertising-checkbox">
            <label for="advertising-checkbox">Advertising</label><br>
        </div>
        <hr>
        <div class="btn-section flex flex-col gap-3 py-5">
            <button type="submit" class="btn-primary">Apply filters</button>
            <button type="reset" class="btn-secondary">Clear filters</button>
        </div>
    </form>
</div>