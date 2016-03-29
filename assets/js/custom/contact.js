;(function() {
    require(['jquery'], function($) {
        var $mapwrapper = $('#mapwrapper'),
            companyName = $mapwrapper.data('name'),
            companyAddress = $mapwrapper.data('address'),
            point = $mapwrapper.data('point'),
            points = [];
            
            if(point) {
                points = point.split(',');
            }

        function initMap() {
            var map = new BMap.Map('mapwrapper');
            var point = new BMap.Point(Number(points[0]), Number(points[1]));
            map.centerAndZoom(point, 17);
            //开启鼠标滚轮缩放
            map.enableScrollWheelZoom(true);
            map.addControl(new BMap.NavigationControl());
            //地图比例尺
            map.addControl(new BMap.ScaleControl());
            map.addControl(new BMap.OverviewMapControl());
            // 创建标注
            var marker = new BMap.Marker(point);
            map.addOverlay(marker);
            //创建信息窗口
            var opts = {
                width : 250,
                height: 60,
                title : '<b class="iw_poi_title">'+ companyName +'</b>'
            };
            var infoWindow = new BMap.InfoWindow(
                '<div class="iw_poi_content">'+ companyAddress +'</div>',
                opts
            );
            // 打开信息窗口
            map.openInfoWindow(infoWindow, map.getCenter());
        };
        initMap();
    });
})();