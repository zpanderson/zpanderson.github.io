var nav_12tree = WpNavBar.readTree({
"childArray" : [
{   'sTitle':'☰ Menu',
    'bIsExternal':true,
    'sUrl':'',
    'sTarget':'_self',"childArray" : [
    {   'sTitle':'Home',
        'bIsExternal':true,
        'bIsWebPath':true,
        'sUrl':'index.html'
    },
    {   'sTitle':'About Us',
        'bIsExternal':true,
        'bIsWebPath':true,
        'sUrl':'about_us.html'
    },
    {   'sTitle':'Gallery',
        'bIsExternal':true,
        'bIsWebPath':true,
        'sUrl':'gallery.html'
    },
    {   'sTitle':'Services',
        'bIsExternal':true,
        'sUrl':'',"childArray" : [
        {   'sTitle':'Wedding Packages',
            'bIsExternal':true,
            'bIsWebPath':true,
            'sUrl':'contact_us.html',
            'sTarget':'_self'
        },
        {   'sTitle':'Party Packages',
            'bIsExternal':true,
            'bIsWebPath':true,
            'sUrl':'calendar.html',
            'sTarget':'_self'
        }]
    },
    {   'sTitle':'Calendar',
        'bIsExternal':true,
        'bIsWebPath':true,
        'sUrl':'wedding_packages.html',
        'sTarget':'_self'
    },
    {   'sTitle':'Contact Us',
        'bIsExternal':true,
        'bIsWebPath':true,
        'sUrl':'services.html'
    }]
}]
});