import { BrowserRouter as Router, Route, Routes } from "react-router-dom";
import { AuthLayout, LoginPage } from "../features/auth";

export const AppRouter = () => {
  return (
    <Router>
      <Routes>
        <Route
          path="/"
          element={
            <AuthLayout>
              <LoginPage />
            </AuthLayout>
          }
        />
      </Routes>
    </Router>
  );
};
