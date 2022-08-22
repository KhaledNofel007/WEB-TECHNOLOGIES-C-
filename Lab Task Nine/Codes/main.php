<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Lab Task 9</title>
    <link rel="stylesheet" href="lab9.css">

    <script src="validation/validation.js"></script>
  </head>
  <body>
    <header>
      <h1>Web Technologies</h1>
    </header>

    <main>
      <br />
      <div>
        <form
          name="validation"
          onsubmit="return valName(), valEmail(), valGender()"
          method="post"
        >
          <div>
            <h2>Add Data</h2>
            <table class="container">
              <tr>
                <th>Name</th>
                <td>
                  <input type="text" name="Name" />
                </td>
              </tr>
              <tr>
                <th>Email</th>
                <td>
                  <input type="text" name="email" />
                </td>
              </tr>
              <tr>
                <th>Gender</th>
                <td>
                  <input type="radio" name="gender" />Male
                  <input type="radio" name="gender" />Female
                  <input type="radio" name="gender" />Other
                </td>
              </tr>
            </table>
          </div>
          <div class="table">
            <input class="submitbtn" type="submit" />
          </div>
        </form>
      </div>
      <br /><br /><br />

      <div>
        <h2>Existing Data</h2>
        <div align="top">
          <input type="Search" placeholder="Search" />
        </div>
        <div id="list"></div>
        <div id="pagination"></div>
        <script src="src/js/pagination.js"></script>
      </div>
    </main>

  </body>
</html>