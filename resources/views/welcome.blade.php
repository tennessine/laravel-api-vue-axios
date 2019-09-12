<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
    </head>
    <body>
        <div id="app">
            <pre>@{{ res }}</pre>
        </div>
        <script src="js/app.js"></script>
        <script>
            var app = new Vue({
                el: '#app',
                data: {
                    res: null
                },
                mounted() {
                    this.getWeather();
                },
                methods: {
                    getWeather() {
                        const self = this;
                        axios.get('/weather').then(function(response) {
                            self.res = response;
                        });
                    }
                }
            });
        </script>
    </body>
</html>
