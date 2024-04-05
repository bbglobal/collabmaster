$(document).ready(function () {
    $(".platform-filter-section")
        .find("[data-id='" + "" + "']")
        .click();
    $(".platform-filter-section").click(() => {
        $('.platform-dropdown-holder').show();
    });
});

$(".more-filters-btn").click(function () {
    let t = $(this).data("id");
    if (t === "price") {
        $(".more-location-holder").hide();
        $(".more-followers-holder").hide();
        $(".more-price-holder").show().css("visibility", "visible");
    } else if (t === "followers") {
        $(".more-location-holder").hide();
        $(".more-price-holder").hide();
        $(".more-followers-holder").show().css("visibility", "visible");
    } else {
        $(".more-price-holder").css("visibility", "hidden");
        $(".more-followers-holder").hide();
        $(".more-location-holder").show();
    }
    $(".modal-filters")
        .find(".modal-content-header-title")
        .text(t.charAt(0).toUpperCase() + t.slice(1));
    showModalFilters();
});

function hideModalFilters() {
    $(".modal-filters").hide();
    $(".modal-content-holder-filters").css("width", "initial");
    document.body.style.position = "initial";
    const scrollY = document.body.style.top;
    document.body.style.position = "";
    document.body.style.top = "";
    window.scrollTo(0, parseInt(scrollY || "0") * -1);
}

function showModalFilters(content, width) {
    if (content) $(".modal-content-holder-filters").html(content);
    if (width) $(".modal-content-holder-filters").css("width", width);
    $(".modal-filters").css("display", "flex");
    // When the modal is shown, we want a fixed body
    const scrollY = window.scrollY;
    document.body.style.position = "fixed";
    document.body.style.top = `-${scrollY}px`;

    // fix scroll issue on mobile
    $(".modal-content-scroll")[0].scrollTop = 1;
}

$(document).on("click", ".close-modal-filters", function () {
    hideModalFilters();
});

$(document).on("click", function (e) {
    if ($(e.target).is(".modal-filters")) hideModalFilters();
});

/* price */

function controlFromSlider(fromSlider, toSlider, fromInput) {
    const [from, to] = getParsed(fromSlider, toSlider);
    // If the "From" value is greater than or equal to the "To" value, adjust it
    if (from >= to) {
        fromSlider.value = to - 50;
        return;
    }
    fillSlider(fromSlider, toSlider, "#C6C6C6", "#222", toSlider);

    // Set values based on conditions
    let amt = Math.min(from, to);
    fromSlider.value = amt;
    fromInput.value = amt;
    fromNum.text(`$${amt.toLocaleString()}`);
}

function controlToSlider(fromSlider, toSlider, toInput) {
    const [from, to] = getParsed(fromSlider, toSlider);
    // If the "From" value is greater than or equal to the "To" value, adjust it
    if (to <= from) {
        toSlider.value = from + 50;
        return;
    }
    fillSlider(fromSlider, toSlider, "#C6C6C6", "#222", toSlider);
    setToggleAccessible(toSlider, "#toSlider");

    // Set values based on conditions
    let amt = Math.max(to, from);
    let plus = "";
    if (amt >= 3000) plus = "+";
    toSlider.value = amt;
    toInput.value = amt;
    toNum.text(`$${amt.toLocaleString()}` + plus);
}

const fromSlider = document.querySelector("#fromSlider");
const toSlider = document.querySelector("#toSlider");
const fromInput = document.querySelector("#fromInput");
const toInput = document.querySelector("#toInput");
const fromNum = $(".range-min-price");
const toNum = $(".range-max-price");
fillSlider(fromSlider, toSlider, "#C6C6C6", "#222", toSlider);
setToggleAccessible(toSlider, "#toSlider");
fromSlider.oninput = () => controlFromSlider(fromSlider, toSlider, fromInput);
toSlider.oninput = () => controlToSlider(fromSlider, toSlider, toInput);

/* followers */

function followersControlFromSlider(
    followersFromSlider,
    followersToSlider,
    followersFromInput
) {
    const [followersFrom, followersTo] = getParsed(
        followersFromSlider,
        followersToSlider
    );
    if (followersFrom >= followersTo) {
        // If the "From" value is greater than or equal to the "To" value, adjust it
        followersFromSlider.value = followersTo - 1000;
    }
    fillSlider(
        followersFromSlider,
        followersToSlider,
        "#C6C6C6",
        "#222",
        followersToSlider
    );
    let amt = calculateNumberInputValue(followersFromSlider.value);
    followersFromInput.value = amt;
    followersFromNum.text(`${amt.toLocaleString()}`);
}

function followersControlToSlider(
    followersFromSlider,
    followersToSlider,
    followersToInput
) {
    const [followersFrom, followersTo] = getParsed(
        followersFromSlider,
        followersToSlider
    );
    if (followersTo <= followersFrom) {
        // If the "To" value is less than or equal to the "From" value, adjust it
        followersToSlider.value = followersFrom + 1000;
    } else {
        // Otherwise, update the slider and input values based on the calculated value
        fillSlider(
            followersFromSlider,
            followersToSlider,
            "#C6C6C6",
            "#222",
            followersToSlider
        );
        setToggleAccessible(followersToSlider, "#followersToSlider");
        followersToSlider.value = followersTo;
    }
    let amt = calculateNumberInputValue(followersToSlider.value);
    let plus = "";
    if (amt >= 1000000) plus = "+";
    followersToInput.value = amt;
    followersToNum.text(`${amt.toLocaleString()}` + plus);
}

const incs = [0, 1000, 10000, 50000, 100000, 500000, 1000000];

function calculateNumberInputValue(sliderValue) {
    return incs[Math.floor(parseFloat(sliderValue) / 1000)];
}

const followersFromSlider = document.querySelector("#followersFromSlider");
const followersToSlider = document.querySelector("#followersToSlider");
const followersFromInput = document.querySelector("#followersFromInput");
const followersToInput = document.querySelector("#followersToInput");
const followersFromNum = $(".range-min-followers");
const followersToNum = $(".range-max-followers");
fillSlider(
    followersFromSlider,
    followersToSlider,
    "#C6C6C6",
    "#222",
    followersToSlider
);
setToggleAccessible(followersToSlider, "#followersToSlider");
followersFromSlider.oninput = () =>
    followersControlFromSlider(
        followersFromSlider,
        followersToSlider,
        followersFromInput
    );
followersToSlider.oninput = () =>
    followersControlToSlider(
        followersFromSlider,
        followersToSlider,
        followersToInput
    );

/* sliders */

function getParsed(currentFrom, currentTo) {
    const from = parseInt(currentFrom.value, 10);
    const to = parseInt(currentTo.value, 10);
    return [from, to];
}

function fillSlider(from, to, sliderColor, rangeColor, controlSlider) {
    const rangeDistance = to.max - to.min;
    const fromPosition = from.value - to.min;
    const toPosition = to.value - to.min;
    controlSlider.style.background = `linear-gradient(
    to right,
${sliderColor} 0%,
${sliderColor} ${(fromPosition / rangeDistance) * 100}%,
${rangeColor} ${(fromPosition / rangeDistance) * 100}%,
${rangeColor} ${(toPosition / rangeDistance) * 100}%,
${sliderColor} ${(toPosition / rangeDistance) * 100}%,
${sliderColor} 100%)`;
}

function setToggleAccessible(currentTarget, selector) {
    const toSlider = document.querySelector(selector);
    if (Number(currentTarget.value) <= 0) {
        toSlider.style.zIndex = 2;
    } else {
        toSlider.style.zIndex = 0;
    }
}

/* location */
const token =
    "7QViSq2fafNPfX9RjpWh5CuX3r5d7pbvOZPdtlrMazE6rOJ124mEpcYvyEmLLWVJ";
const locationUrl = "/get-locations";
const multiple = false;

let searchInput = $(".filter-search-input");
let clearInputBtn = $(".clear-input-btn");

// hide filters if clicked outside
$(document).on("click", function (e) {
    if ($(e.target).closest(".search-form-holder").length === 0) {
        $(".filter-dropdown-holder").hide();
        hideClearBtn();
    }

    let dropdown = $(".filters-btn-dropdown");
    if (!dropdown.is(e.target) && dropdown.has(e.target).length === 0)
        dropdown.hide();
});

$(".filter-section").click(function () {
    let width =
        window.innerWidth ||
        document.documentElement.clientWidth ||
        document.body.clientWidth;
    if (width >= 800 || $(this).hasClass("category-filter-section")) {
        let dropdown = $(this).find(".filter-dropdown-holder");
        let hide = !dropdown.is(":visible");
        $(".filter-dropdown-holder").hide(); // hide all dropdowns
        if (hide) dropdown.show();
    }
});

$(".mobile-select-dropdown").change(function () {
    $(this)
        .siblings(".filter-dropdown-holder")
        .find(`[data-id='${$(this).val()}']`)
        .click();
});

// platform click
$(".filter-dropdown-holder .filter-dropdown-option").click(function (e) {
    let parent = $(this).parent(".filter-dropdown-holder");
    let txt = $(this).text();
    let id = $(this).data("id");
    parent
        .children(".filter-dropdown-option")
        .removeClass("filter-dropdown-option-selected"); // reset all options styling
    $(this).addClass("filter-dropdown-option-selected"); // set new options styling
    let placeholder = parent.siblings(".js-filter-placeholder");
    placeholder
        .text(txt)
        .removeClass("filter-placeholder")
        .addClass("filter-placeholder-chosen");
    let currPlarform = parent.siblings("input").val();
    parent.siblings("input").val(id); // set input
    parent.hide();
    e.stopPropagation();

    // if any or ugc selected hide followers
    if (!id.length || id === "user generated content") {
        $(".followers-filters-btn-holder").hide();
        $(".more-filter-follower-select").val("");
    } else if (currPlarform !== id) {
        $(".followers-filters-btn-holder").show();
        $(".followers-filters-btn").removeClass("filters-btn-selected");
    }
    if (!id.length) {
        // if any selected hide content types
        $(".type-filters-btn-holder").hide();
        clearCheckboxes();
    } else if (currPlarform !== id) {
        updateContentTypes(id);
    }
});

$(".category-filter-section").click(function () {
    searchInput.focus();
});

// category click
$(".filter-search-input-pop-option").click(function (e) {
    let id = $(this).data("id");
    let txt = searchInput.val();
    if (txt && txt.slice(-1) !== " ") txt += " ";
    searchInput.val(txt + id + " "); // set input
    searchInput.focus(); // type on input
    e.stopPropagation();

    let width =
        window.innerWidth ||
        document.documentElement.clientWidth ||
        document.body.clientWidth;
    if (width <= 800) {
        hideCategoryDropdown();
    }
});

searchInput.focus(function () {
    if (searchInput.val().trim()) showClearBtn();
});

function showClearBtn() {
    clearInputBtn.css("display", "flex");
}

function hideClearBtn() {
    clearInputBtn.hide();
}

clearInputBtn.click(function (e) {
    e.stopPropagation();
    searchInput.val("").focus();
    $(this).hide();
});

function chooseKeyword(el, e) {
    let id = $(el).data("id");
    let txt = searchInput.val();

    let val = searchInput.val();
    let breakIdx = getDelimiter(val);
    // replace word after this with autofill
    if (breakIdx !== -1) {
        searchInput.val(txt.substring(0, breakIdx) + " " + id + " ");
    } else {
        searchInput.val(txt.substring(0, breakIdx) + id + " ");
    }

    searchInput.focus(); // type on input
    e.stopPropagation();
    hideSuggestions();

    let width =
        window.innerWidth ||
        document.documentElement.clientWidth ||
        document.body.clientWidth;
    if (width <= 800) {
        hideCategoryDropdown();
    }
}

$('.apply-filter-btn').click( ()=> {
    $(".search-form-holder").submit();
})

$(".search-btn, .apply-filter-btn, .filters-btn-dropdown-footer .btn").click(
    function () {
        btnLoad($(this));
        // dont show empty params in url
        $(".search-form-holder input, .search-form-holder select").each(
            function () {
                if (!$(this).val()) $(this).attr("name", "");
            }
        );
        // dont add price in params if default
        if (
            $('[name="pmi"]').val() === "50" &&
            $('[name="pmx"]').val() === "3000"
        ) {
            $('[name="pmi"]').attr("name", "");
            $('[name="pmx"]').attr("name", "");
        }
        // dont add followers in params if default
        if (
            $('[name="fmi"]').val() === "0" &&
            $('[name="fmx"]').val() === "1000000"
        ) {
            $('[name="fmi"]').attr("name", "");
            $('[name="fmx"]').attr("name", "");
        }
        $(".search-form-holder").submit();
    }
);

let searchCategories = [
    "Lifestyle",
    "Fashion",
    "Beauty",
    "Travel",
    "Health &amp; Fitness",
    "Food &amp; Drink",
    "Comedy &amp; Entertainment",
    "Model",
    "Family &amp; Children",
    "Art &amp; Photography",
    "Music &amp; Dance",
    "Animals &amp; Pets",
    "Adventure &amp; Outdoors",
    "Education",
    "Entrepreneur &amp; Business",
    "Athlete &amp; Sports",
    "LGBTQ2+",
    "Gaming",
    "Vegan",
    "Technology",
    "Actor",
    "Healthcare",
    "Skilled Trades",
    "Automotive",
    "Cannabis",
    "Celebrity &amp; Public Figure",
    "Medical",
    "Actress",
    "Funny",
    "Humor",
    "Dancing",
    "Parent",
    "Weed",
    "Marijuana",
    "Plant Based",
    "Gamer",
    "Streamer",
    "CBD",
    "Acting",
    "Foodie",
    "Eyelash",
    "Body Positivity",
    "Nature",
    "Mom",
    "Dad",
    "Boxing",
    "Cosplay",
    "Ski",
    "Bike",
    "Skincare",
    "Swimwear",
    "Streetwear",
    "Nomad",
    "Home Decor",
    "Finance",
    "Law",
    "Realtor",
    "Money",
    "NFT",
    "Doctor",
    "Dentist",
    "Nurse",
    "Yoga",
    "Wellness",
    "CrossFit",
    "Gym",
    "Running",
    "Tennis",
    "Basketball",
    "Soccer",
    "College Athlete",
    "NCAA",
    "Snowboard",
    "Teacher",
    "Student",
    "School",
    "Coach",
    "Dog",
    "Cat",
    "ASMR",
    "Prank",
    "Magic",
    "Cooking",
    "Baking",
    "Keto",
    "Gluten Free",
    "Coffee",
    "Wine",
    "Beer",
    "Recipe",
    "Vegetarian",
    "Hiking",
    "Fishing",
    "Hunting",
    "Sewing",
    "Drawing",
    "Film",
    "Guitar",
    "Singer",
    "Rap",
    "Hip Hop",
    "Car",
    "Motorcycle",
    "Mechanic",
    "Driving",
    "Racing",
    "Relationship",
    "Gay",
    "Transgender",
    "Cosmetic",
    "Perfume",
    "Pedicure",
    "Tattoo",
    "Tanning",
    "Dermatologist",
    "Nail",
    "Esthetician",
    "Weight Loss",
    "Hiit",
    "Psychedelic",
    "Strength Training",
    "Powerlifting",
    "Pilates",
    "Meal Prep",
    "Songwriter",
    "Design",
    "Software Developer",
    "Hair",
    "Makeup",
    "Painter",
    "Blogger",
    "Investing",
    "Crypto",
    "Nutrition",
    "Hockey",
    "Football",
    "Skateboard",
    "DIY",
    "Horse",
    "Restaurant",
    "Chef",
    "Camping",
    "Truck",
    "Renovation",
    "Couple",
    "Manicure",
    "Cosmetologist",
    "Cold Therapy",
    "Personal Trainer",
    "Bartender",
    "Dessert",
    "Charcuterie",
    "Movie",
    "Science",
    "Meme",
    "Theater",
    "Architect",
    "Music Producer",
    "Non Binary",
    "Dj",
    "Ceramics",
    "Animation",
    "Musician",
    "Engineer",
    "Robotics",
    "Ecommerce",
    "Dropshipping",
    "Stock Market",
    "Startup",
    "Marketing",
    "Construction",
    "Kayaking",
    "Exploration",
    "Survival",
    "Climbing",
    "Parkour",
    "Baseball",
    "Skydiver",
    "Softball",
    "Volleyball",
    "VFX",
    "Book",
    "Christian",
];
let searchCategoriesDict = {
    Lifestyle: ["Home Decor", "Blogger", "Christian"],

    Fashion: ["Swimwear", "Streetwear"],

    Beauty: [
        "Eyelash",
        "Skincare",
        "Cosmetic",
        "Perfume",
        "Pedicure",
        "Tattoo",
        "Tanning",
        "Dermatologist",
        "Nail",
        "Esthetician",
        "Hair",
        "Makeup",
        "Manicure",
        "Cosmetologist",
    ],

    Travel: ["Nomad"],

    "Health &amp; Fitness": [
        "Body Positivity",
        "Yoga",
        "Wellness",
        "CrossFit",
        "Gym",
        "Weight Loss",
        "Hiit",
        "Psychedelic",
        "Strength Training",
        "Powerlifting",
        "Pilates",
        "Nutrition",
        "Cold Therapy",
        "Personal Trainer",
    ],

    "Food &amp; Drink": [
        "Cooking",
        "Baking",
        "Keto",
        "Gluten Free",
        "Coffee",
        "Wine",
        "Beer",
        "Recipe",
        "Vegetarian",
        "Meal Prep",
        "Restaurant",
        "Chef",
        "Bartender",
        "Dessert",
        "Charcuterie",
    ],

    "Comedy &amp; Entertainment": [
        "ASMR",
        "Prank",
        "Magic",
        "Movie",
        "Science",
        "Meme",
    ],

    Model: [],

    "Family &amp; Children": ["Mom", "Dad", "Relationship", "Couple"],

    "Art &amp; Photography": [
        "Sewing",
        "Drawing",
        "Film",
        "Design",
        "Painter",
        "Theater",
        "Architect",
        "Music Producer",
        "Dj",
        "Ceramics",
        "Animation",
        "Musician",
    ],

    "Music &amp; Dance": ["Guitar", "Singer", "Rap", "Hip Hop", "Songwriter"],

    "Animals &amp; Pets": ["Dog", "Cat", "Horse"],

    "Adventure &amp; Outdoors": [
        "Nature",
        "Hiking",
        "Fishing",
        "Hunting",
        "Camping",
        "Kayaking",
        "Exploration",
        "Survival",
        "Climbing",
    ],

    Education: ["Teacher", "Student", "School", "Coach", "DIY", "Book"],

    "Entrepreneur &amp; Business": [
        "Finance",
        "Law",
        "Realtor",
        "Money",
        "NFT",
        "Investing",
        "Crypto",
        "Ecommerce",
        "Dropshipping",
        "Stock Market",
        "Startup",
        "Marketing",
    ],

    "Athlete &amp; Sports": [
        "Boxing",
        "Ski",
        "Bike",
        "Running",
        "Tennis",
        "Basketball",
        "Soccer",
        "College Athlete",
        "NCAA",
        "Snowboard",
        "Hockey",
        "Football",
        "Skateboard",
        "Parkour",
        "Baseball",
        "Skydiver",
        "Softball",
        "Volleyball",
    ],

    "LGBTQ2+": ["Gay", "Transgender", "Non Binary"],

    Gaming: ["Cosplay"],

    Vegan: [],

    Technology: ["Software Developer", "Engineer", "Robotics", "VFX"],

    Actor: [],

    Healthcare: ["Doctor", "Dentist", "Nurse"],

    "Skilled Trades": ["Renovation", "Construction"],

    Automotive: ["Car", "Motorcycle", "Mechanic", "Driving", "Racing", "Truck"],

    Cannabis: [],

    "Celebrity &amp; Public Figure": [],

    Medical: ["Doctor", "Dentist", "Nurse"],

    Actress: [],

    Funny: ["ASMR", "Prank", "Magic", "Movie", "Science", "Meme"],

    Humor: ["ASMR", "Prank", "Magic", "Movie", "Science", "Meme"],

    Dancing: ["Guitar", "Singer", "Rap", "Hip Hop", "Songwriter"],

    Parent: ["Mom", "Dad", "Relationship", "Couple"],

    Weed: [],

    Marijuana: [],

    "Plant Based": [],

    Gamer: ["Cosplay"],

    Streamer: ["Cosplay"],

    CBD: [],

    Acting: [],

    Foodie: [
        "Cooking",
        "Baking",
        "Keto",
        "Gluten Free",
        "Coffee",
        "Wine",
        "Beer",
        "Recipe",
        "Vegetarian",
        "Meal Prep",
        "Restaurant",
        "Chef",
        "Bartender",
        "Dessert",
        "Charcuterie",
    ],
};
let suggestionArea = $(".filter-search-input-suggestion-area");
let suggestionHolder = $(".filter-search-input-suggestion-holder");

searchInput.click(() => {
    $('.category-dropdown-holder').show();
})

searchInput.keyup(function (e) {
    if (e.keyCode === 13) {
        $(this).blur();
        hideCategoryDropdown();
        $(".search-btn").click();
        return;
    }

    let val = $(this).val();
    let breakIdx = getDelimiter(val);
    // only match word after delimiter
    if (breakIdx !== -1) {
        val = val.substring(breakIdx + 1);
    }

    // always show dropdown when typing
    $(".category-dropdown-holder").show();
    hideSuggestions();

    if (val.trim()) {
        showClearBtn();
        let results = [];
        for (let i = 0; i < searchCategories.length; i++) {
            let arrVal = searchCategories[i];
            // loop and get matching results
            if (htmlDecode(arrVal.toUpperCase()).includes(val.toUpperCase()))
                results.push(arrVal);
        }

        // sort results
        results.sort(compare);

        // add results
        for (let i = 0; i < Math.min(results.length, 4); i++) {
            suggestionHolder.append(
                `<div class='filter-search-input-suggestion-option' data-id='${results[i]}' onclick='chooseKeyword(this, event)'>${results[i]}</div>`
            );
        }
        if (results.length) suggestionArea.show();

        if (
            suggestionHolder.children().length < 5 &&
            suggestionHolder.children().length > 0
        ) {
            // get top result
            let topResult = $(".filter-search-input-suggestion-option")
                .first()
                .data("id");
            // if its a niche
            if (htmlEncode(topResult) in searchCategoriesDict) {
                // list more subniches
                let subNiches = searchCategoriesDict[htmlEncode(topResult)];
                let count = 5 - suggestionHolder.children().length;
                for (let i = 0; i < Math.min(count, subNiches.length); i++) {
                    suggestionHolder.append(
                        `<div class='filter-search-input-suggestion-option' data-id='${subNiches[i]}' onclick='chooseKeyword(this, event)'>${subNiches[i]}</div>`
                    );
                }
            } else {
                // if its a subniche
                Object.keys(searchCategoriesDict).forEach(function (key) {
                    let subNiches = searchCategoriesDict[key];
                    if (subNiches.includes(topResult)) {
                        // list niche if not already in results
                        if (!results.includes(key))
                            suggestionHolder.append(
                                `<div class='filter-search-input-suggestion-option' data-id='${key}' onclick='chooseKeyword(this, event)'>${key}</div>`
                            );
                        // list more subniches with same parent
                        let count = 5 - suggestionHolder.children().length;
                        for (
                            let i = 0;
                            i < Math.min(count, subNiches.length);
                            i++
                        ) {
                            // loop results
                            let add = true;
                            $(".filter-search-input-suggestion-option").each(
                                function () {
                                    // if subniche already in results
                                    if ($(this).data("id") === subNiches[i]) {
                                        add = false;
                                        return false;
                                    }
                                }
                            );
                            if (add)
                                suggestionHolder.append(
                                    `<div class='filter-search-input-suggestion-option' data-id='${subNiches[i]}' onclick='chooseKeyword(this, event)'>${subNiches[i]}</div>`
                                );
                        }
                    }
                });
            }
        }
    } else {
        hideClearBtn();
    }
});

function compare(a, b) {
    // sort b before a
    if (a.length > b.length) return 1;
    if (a.length < b.length) return -1;
    // a must be equal to b
    return 0;
}

function hideCategoryDropdown() {
    $(".category-dropdown-holder").hide();
}

function hideSuggestions() {
    suggestionArea.hide();
    suggestionHolder.html("");
}

function htmlDecode(value) {
    return $("<textarea/>").html(value).text();
}

function htmlEncode(value) {
    return $("<textarea/>").text(value).html();
}

function getDelimiter(str) {
    for (let i = str.length - 1; i >= 0; i--) {
        let c = str.charAt(i);
        // if not letter, number or &
        if (!/([a-zA-Z0-9&])\w*/.test(c)) {
            return i;
        }
    }
    return -1; // no alphanumeric character at all
}

$(".filters-btn").click(function (e) {
    let show = true;
    let dropdown = $(this).siblings(".filters-btn-dropdown");
    if (dropdown.is(":visible")) show = false;
    $(".filters-btn-dropdown").hide();
    if (show) dropdown.show();
    e.stopPropagation();
});

$(".js-clear-checkboxes").click(function () {
    clearCheckboxes();
});

$(".js-clear-select").click(function () {
    $(this).parents(".filters-btn-dropdown").find(".input").val("");
});

function updateContentTypes(platform) {
    $(".type-filters-btn-holder").show();
    $(".type-filters-btn").removeClass("filters-btn-selected");
    clearCheckboxes();
    $(".checkbox-holder").hide();
    $(`[data-platform='${platform}']`).show();
}

function clearCheckboxes() {
    $(".filters-btn-dropdown-checkbox").prop("checked", false);
}
