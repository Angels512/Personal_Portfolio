
window.addEventListener('load', () =>
{
    document.querySelector('.main').classList.remove('hidden');
    document.querySelector('.home-section').classList.add('active');

    // Page Loader
    document.querySelector('.page-loader').classList.add('fade-out');
    setTimeout(() =>
    {
        document.querySelector('.page-loader').style.display = 'none';
    },800);
});

/* ------------ Toogle Navbar ------------ */
const navToggler = document.querySelector('.nav-toggler');
navToggler.addEventListener('click', () =>
{
    hideSection();
    toogleNavbar();
    document.body.classList.toggle('hide-scrolling');
});

function hideSection()
{
    document.querySelector('section.active').classList.toggle('fade-out');
}

function toogleNavbar()
{
    document.querySelector('.header').classList.toggle('active');
}



/* ------------ Active Section ------------ */
document.addEventListener('click', (e) =>
{
    if (e.target.classList.contains('link-item') && e.target.hash !== "")
    {
        document.querySelector('.overlay').classList.add('active');

        const hash = e.target.hash;
        navToggler.classList.add('hide');
        if (e.target.classList.contains('nav-item'))
        {
            toogleNavbar();
        }else {
            hideSection();
            document.body.classList.add('hide-scrolling')
        }
        setTimeout(() =>
        {
            document.querySelector('section.active').classList.remove('active', 'fade-out');
            document.querySelector(hash).classList.add('active');
            window.scrollTo(0,0);
            document.body.classList.remove('hide-scrolling');
            navToggler.classList.remove('hide');

            document.querySelector('.overlay').classList.remove('active');
        }, 500);
    }
});



/* ------------ About Tabs ------------ */
const tabsContainer = document.querySelector(".about-tabs");
const aboutSection = document.querySelector(".about-section");

tabsContainer.addEventListener('click', (e) =>
{
    if(e.target.classList.contains('tab-item') && !e.target.classList.contains('active'))
    {
        tabsContainer.querySelector('.active').classList.remove('active');
        e.target.classList.add('active');

        const target = e.target.getAttribute('data-target');
        aboutSection.querySelector('.tab-content.active').classList.remove('active');
        aboutSection.querySelector(target).classList.add('active');
    }
});



/* ------------ Portfolio Item Details Popup ------------ */
document.addEventListener('click', (e) =>
{
    if (e.target.classList.contains('view-project-btn'))
    {
        tooglePortfolioPopup();
        document.querySelector('.portfolio-popup').scrollTo(0,0);
        portfolioItemDetails(e.target.parentElement);
    }
});

function tooglePortfolioPopup()
{
    document.querySelector('.portfolio-popup').classList.toggle('open');
    document.body.classList.toggle('hide-scrolling');
    document.querySelector('.main').classList.toggle('fade-out');
}

function portfolioItemDetails(portfolioItem)
{
    let srcImagePP = portfolioItem.querySelector('.portfolio-item-thumbnail img').src;
    let titlePP = portfolioItem.querySelector('.portfolio-item-title').innerHTML;
    let bodyPP = portfolioItem.querySelector('.portfolio-item-details').innerHTML;

    document.querySelector('.pp-thumbnail img').src = srcImagePP;
    document.querySelector('.pp-header h3').innerHTML = titlePP;
    document.querySelector('.pp-body').innerHTML = bodyPP;
}

// Close Popup
document.querySelector('.pp-close').addEventListener('click', tooglePortfolioPopup);
document.addEventListener('click', (e) =>
{
    if(e.target.classList.contains('pp-inner'))
    {
        tooglePortfolioPopup();
    }
});
