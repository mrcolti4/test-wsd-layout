import { object, string } from "yup";

const formSchema = object().shape({
  name: string().required().min(2, "Name must be at least 2 characters long"),
  email: string().email().required(),
  message: string().required(),
});

const form = document.querySelector("form.touch__form");
let errorBlock;

form.addEventListener("submit", async (e) => {
  e.preventDefault();
  const name = form[0].value;
  const email = form[1].value;
  const message = form[2].value;

  if (errorBlock) {
    errorBlock.remove();
    errorBlock = null;
  }

  let errObj = {
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

  if (result) errObj = {};

  if (errObj.name) {
    errorBlock = document.createElement("p");
    errorBlock.classList.add("form__error");
    errorBlock.innerHTML = `${errObj.message}`;

    const targetInput = form.querySelector(`input[name=${errObj.name}]`);
    targetInput.parentNode.insertBefore(errorBlock, targetInput.nextSibling);
  } else {
    form.reset();
  }
});
