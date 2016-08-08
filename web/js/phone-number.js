/**
 * Created by Руслан on 08.08.2016.
 */
(function (){
    $('#users-phone').formatter({
        'pattern': '+{{9}} ({{999}})-{{999}}-{{99}}-{{99}}',
        'persistent': true
    });
})();