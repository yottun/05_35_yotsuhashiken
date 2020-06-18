function tplawesome(e, t) { res = e; for (var n = 0; n < t.length; n++) { res = res.replace(/\{\{(.*?)\}\}/g, function (e, r) { return t[n][r] }) } return res }

$("button").on("click", function () {
    $("#search").val($("[name=soccer]:checked").val());
    console.log("input:checked");
})

$(function () {
    $("#searchBtn").on("click", function (e) {
        e.preventDefault();
        let request = gapi.client.youtube.search.list({
            // rejionCode: 2,
            part: "snippet",
            type: "video",
            q: ($("#search").val()),
            // q: encodeURIComponent($("#search").val()).replace(),
            // q: encodeURIComponent($("#search").val()).replace(/%20/g, "+"),
            maxResults: 3,
            order: "viewCount",
            // publishedAfter: "2019-01-01T00:00:00Z"
        });
        request.execute(function (response) {
            let results = response.result;
            $.each(results.items, function (index, item) {
                $.get("item.html", function (data) {
                    $("#results").append(tplawesome(data, [{ "title": item.snippet.title, "videoid": item.id.videoId }]));
                });
                // $("#results").append(item.id.videoId+""+item.snippet.title+"<br>")
            });
        });
    });
});

function init() {
    // apiキー
    gapi.client.setApiKey("AIzaSyBswGw9pFpkn0la3cS6EFXwfTprHUqtHDM");
    gapi.client.load("youtube", "v3", function () {
    });
}