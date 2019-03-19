<script src="https://cdn.firebase.com/libs/geofire/4.1.0/geofire.min.js"></script>

<form id="addfish">
      <label>
        Lat: <input id="addlat" type="number" step="any" min="-90" max="90" required>
      </label>
      <label>
        Lon: <input id="addlon" type="number" step="any" min="-180" max="180" required>
      </label>
      <input type="submit" value="add fish">
    </form>

    <!-- Query fish  -->
    <form id="queryfish">
      <label>
        Lat: <input id="querylat" type="number" step="any" min="-90" max="90" required>
      </label>
      <label>
        Lon: <input id="querylon" type="number" step="any" min="-180" max="180" required>
      </label>
      <label>
        Radius: <input id="queryradius" type="number" step="any" min="0" max="40000" required>
      </label>
      <input type="submit" value="query">
    </form>

    <!-- Message log -->
    <div id="log"></div>