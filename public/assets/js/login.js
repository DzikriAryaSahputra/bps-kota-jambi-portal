/**
 * Toggle visibilitas password.
 */
function togglePwd() {
  const input = document.getElementById("pwdInput");
  const icon = document.getElementById("eyeIcon");

  if (input.type === "password") {
    input.type = "text";
    icon.textContent = "visibility_off";
  } else {
    input.type = "password";
    icon.textContent = "visibility";
  }
}
