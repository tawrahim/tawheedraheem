module ApplicationHelper
  # This function returns a title per page basis
  def full_title(page_title)
    base_title = "Tawheed Abdul-Raheem"
    if page_title.empty?
      base_title
    else
      "#{base_title} | #{page_title}"
    end
  end
end
