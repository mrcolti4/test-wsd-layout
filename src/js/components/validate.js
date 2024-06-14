import { object, string } from "yup";

const formSchema = object().shape({
  name: string().required().min(2, "Name must be at least 2 characters long"),
  email: string().email().required(),
  message: string().required(),
});

const form = document.querySelector("form.touch__form");

form.addEventListener("submit", async (e) => {
  e.preventDefault();

  const name = form[0].value;
  const email = form[1].value;
  const message = form[2].value;

  const errObj = {
    name: null,
    message: "",
  };

  const result = await formSchema
    .validate({
      name,
      email,
      message,
    })
    .catch((err) => {
      errObj.name = err.path;
      errObj.message = err.errors[0];
    });
  console.log(errObj);
  console.log(result);
});
